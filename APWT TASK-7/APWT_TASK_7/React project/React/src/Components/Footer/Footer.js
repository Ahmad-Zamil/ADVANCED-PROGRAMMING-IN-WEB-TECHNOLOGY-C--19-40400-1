/* eslint-disable react/jsx-no-target-blank */
import React from 'react';
import { Link } from 'react-router-dom';

const Footer = () => {
    return (
        <div>
            <div>
                <div className="footer-area pt-5" style={{ backgroundColor:"black" }}>
                    <div className="container text-white">
                        <div className="row">
                            <div className="col-sm-3">
                                <div className="text-white">
                                    <h4 className="mb-4 text-white">ONLINE PHARMACY</h4>
                                </div>
                                <div>
                                    <p className="text-white">App is the first Bangladeshi app that brought healthcare system to your doorstep!</p>
                                </div>
                            </div>
                            <div className="col-sm-3 px-5 text-white">
                                <div>
                                    <h4 className="mb-4 text-white">Category</h4>
                                </div>
                                <div>
                                    <div>A</div>
                                    <div>B</div>
                                    <div>C</div>
                                    <div>D</div>
                                </div>
                            </div>
                            <div className="col-sm-3 px-5">
                                <div>
                                    <h4 className="mb-4 text-white">LINKS</h4>
                                </div>
                                <div className="text-white">
                                    <div> <Link className="text-white" to="/" style={{ textDecoration: "none" }}>Home</Link> </div>
                                    <div> <Link className="text-white" to="/login" style={{ textDecoration: "none" }}>Login</Link> </div>
                                    <div> <Link className="text-white" to="/about" style={{ textDecoration: "none" }}>About</Link></div>
                                    <div> <Link className="text-white" to="/contact" style={{ textDecoration: "none" }}>Contact</Link> </div>
                                </div>
                            </div>
                            <div className="col-md-3">
                                <div className="" style={{ marginLeft:"60px" }}>
                                    <div>
                                        <h4 className="mb-4 text-white">ADDRESS</h4>
                                    </div>
                                    <div>
                                        <p className="text-white"> <br /> Dhaka,Bangladesh</p>
                                    </div>
                                    <div className="">
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                            className="fab fa-facebook h4 pr-3"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank"> <i
                                            className="fab fa-linkedin h4 px-2"></i></a>
                                        <a href="https://www.github.com/" target="_blank"> <i
                                            className="fab h4 fa-github-square px-2"></i></a>
                                    </div>
                                    <div className="btn btn-danger btn-sm">
                                        Phone: #######
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p className="text-center py-4 fw-bold"><small className="text-white">copyright 2022</small></p>
                    </div>
                </div>
            </div>




        </div>
    );
};

export default Footer;