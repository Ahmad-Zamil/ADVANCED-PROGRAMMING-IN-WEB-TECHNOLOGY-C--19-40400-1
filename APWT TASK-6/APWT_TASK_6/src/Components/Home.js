import React from 'react';
import NavBar from './NavBar';

const Home = () => {
    return (
        <div>
            <NavBar />
           <div className="d-flex justify-content-center align-items-center" style={{ height: "90vh", background:"#3580D1"}}>
               <div>
                   <h1>Home Route</h1>
                
               </div>
           </div>
        </div>
    );
};

export default Home;