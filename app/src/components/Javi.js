import React from 'react';
import { Outlet } from 'react-router-dom';

export const Javi = () => {
    return (
        <>
            <h1>Hello world!</h1>
            <Outlet />
        </>
    );
};
