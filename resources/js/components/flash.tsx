import { toast } from "sonner";
import { useEffect } from 'react';
import { usePage } from '@inertiajs/react';
import { type SharedData } from '@/types';

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

        sessionStorage.setItem(`flash_${flash.id}`, "shown");
    }, [flash.id, flash.message, flash.status]);

    return null;
}
