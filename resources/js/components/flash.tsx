import { type SharedData } from '@/types';
import { usePage } from '@inertiajs/react';
import { useEffect } from 'react';
import { toast } from 'sonner';

export default function Flash() {
    const { flash } = usePage<SharedData>().props;

    useEffect(() => {
        if (!flash.id || !flash.message || !flash.status) return;

        if (sessionStorage.getItem(`flash_${flash.id}`)) return;

        switch (flash.status) {
            case 'success':
                toast.success(flash.message);
                break;
            case 'info':
                toast.info(flash.message);
                break;
            case 'warning':
                toast.warning(flash.message);
                break;
            case 'error':
                toast.error(flash.message);
                break;
            default:
                toast(flash.message);
        }

        sessionStorage.setItem(`flash_${flash.id}`, 'shown');
    }, [flash.id, flash.message, flash.status]);

    return null;
}
