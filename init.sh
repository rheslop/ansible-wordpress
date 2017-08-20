#!/bin/bash

# User must be root

if [ "$(id -u)" != "0" ]; then
	echo "You must be root to run this script."
	exit 1
fi

############ START VARIABLES #################

GUEST_NAME=kwp-${RANDOM}

TEMPLATE=\
/var/lib/libvirt/images/templates/Fedora-Cloud-Base-26-1.5.x86_64.qcow2

GUEST_IMAGE=\
/var/lib/libvirt/images/${GUEST_NAME}.qcow2

############ END VARIABLES ####################

/usr/bin/qemu-img create -f qcow2 -b ${TEMPLATE} ${GUEST_IMAGE}

cat > /tmp/ifcfg-eth0 << EOF
DEVICE=eth0
NAME=eth0
BOOTPROTO=none
ONBOOT=yes
IPADDR=192.168.0.5
NETMASK=255.255.255.0
GATEWAY=192.168.0.1
DNS1=68.94.156.9
DNS2=68.94.157.9
EOF

export LIBGUESTFS_BACKEND_SETTINGS=network_bridge=br0

virt-customize -a ${GUEST_IMAGE} \
--install python,libselinux-python,python2-dnf \
--uninstall cloud-init \
--copy-in /tmp/ifcfg-eth0:/etc/sysconfig/network-scripts/ \
--ssh-inject root --selinux-relabel

/usr/bin/virt-install \
--disk path=${GUEST_IMAGE} \
--network network=net-br0 \
--name ${GUEST_NAME} \
--ram 1024 \
--import \
--os-type=linux \
--os-variant=fedora23
