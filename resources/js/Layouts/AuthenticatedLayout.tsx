import { useState, PropsWithChildren, ReactNode } from 'react';
import Navbar from '@/Components/Layouts/Navbar';
import Sidebar from '@/Components/Layouts/Sidebar';
import { User } from '@/types';

export default function Authenticated({ user, header, children }: PropsWithChildren<{ user: User, header?: ReactNode }>) {


    return (
        <div className="min-h-screen bg-gray-100">
            <Navbar user={user}></Navbar>
            <div className="flex">
                <Sidebar header={header}></Sidebar>
                <main className='container mx-auto '>
                    {children}
                </main>
            </div>
        </div>
    );
}
