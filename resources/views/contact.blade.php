@extends('layouts.frontend.master')

@section('content')

<div class="footer-features">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="name name" class="form-control form-footer" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" required="" class="form-control form-footer" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-solid-state">Send Message</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-list">
                                <ul class="list-unstyled">
                                    <li class="list-table">
                                        <i class="ion-ios-home"></i><p>K.H Rw Ilat Puri Harmoni 5, Bogor Jawa Barat Indonesia</p>
                                    </li>
                                    <li class="list-table">
                                        <i class="ion-android-call"></i><p>(+62) 896-3910-7649 </p>
                                    </li>
                                    <li class="list-table">
                                        <i class="ion-email"></i><p>rbayu901@gmail.com</p>
                                    </li>
                                </ul>
                                <div class="list-solid-state">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#"><i class="ion-social-facebook icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-linkedin icon-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <i class="ion-aperture icon-aperture"></i>
                                        </li>
                                        <li>
                                            <i class="ion-social-rss icon-rss"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    @stop