import React from 'react';
import ReactDOM from 'react-dom/client';
import {createRoot} from "react-dom/client.js";
import User from "./User.jsx";

function SignYoutube() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Sign Petition With Youtube</div>

                        <div className="card-body">
                            <div className="g-signin2" data-onsuccess="onSignIn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default SignYoutube;

const rootElement = document.getElementById('signyoutube')
const root = createRoot(rootElement);

root.render(<SignYoutube />);


