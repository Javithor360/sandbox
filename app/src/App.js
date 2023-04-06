import './App.css';

import { HashRouter, Route, Routes } from 'react-router-dom';
import { Javi } from './components/Javi';

function App() {
    return (
        <HashRouter basename={'/'}>
            <Routes>
                <Route path="/" element={<Javi />} />
            </Routes>
        </HashRouter>
    );
}

export default App;
