<!DOCTYPE html>
<html>
    <head>
        <title>Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php $this->load->view('header/head'); ?>
    </head>


    <body>
        <header>
            <?php $this->load->view('header/header'); ?>

            <div class="container-fluid book page-title">
                <div class="row">
                    <h1>Booking</h1>
                </div>
            </div>
        </header>
        <section class="ride-detail">
            <div class="container-fluid brown-color">
                <div class="row">
                    <div class="container">
                        <div class="col-md-4 ride-title">
                            <h1>Ride Details</h1>
                        </div>
                        <div class="col-md-8 ride-dropdown">
                            <div class="left">
                                <img src="<?php echo base_url(); ?>/assets/images/booking/icon_1.png">
                                <label>Passengers</label>
                                <select class="passenger">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="right">
                                <img src="<?php echo base_url(); ?>/assets/images/booking/icon_3.png">
                                <label>Luggage</label>
                                <select class="passenger">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="col-md-6 ride-left">
                            <div class="common-row first-row bottom-border">
                                <div class="airport">
                                    <img src="<?php echo base_url(); ?>/assets/images/booking/icon_4.png">Choose Airport: JFK EWR LGA</div>
                            </div>
                            <div class="common-row second-row bottom-border">
                                <div colspan="2">
                                    <img src="<?php echo base_url(); ?>/assets/images/booking/icon_5.png">
                                    <select class="passenger">
                                        <option>Search For Pickup Address</option>
                                        <option>Country 2</option>
                                        <option>Country 3</option>
                                        <option>Country 4</option>
                                        <option>Country 5</option>
                                        <option>Country 6</option>
                                        <option>Country 7</option>
                                        <option>Country 8</option>
                                        <option>Country 9</option>
                                        <option>Country 10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="common-row third-row bottom-border">
                                <div class="pick-date">
                                    <img class="calender-img" src="<?php echo base_url(); ?>/assets/images/booking/icon_7.png">
                                    <div class='input-group date' id='datetimepicker-ride'>
                                        <label>Date</label>
                                        <input type="text" class="date-picker" placeholder="YYYY/MM/DD"/>
                                    </div>
                                </div>

                                <div class="pick-time">
                                    <img class="calender-img" src="<?php echo base_url(); ?>/assets/images/booking/icon_7.png">
                                    <div class='input-group date' id='datetimepicker-ride'>
                                        <label>Pickup Time</label>
                                        <input type='text'  id='datetimepicker3' placeholder="HH:MM" />
                                    </div>	

                                </div>
                            </div>
                            <div class="common-row first-row">
                                <div>
                                    <img src="<?php echo base_url(); ?>/assets/images/booking/icon_8.png">
                                    <input type="text" class="form-control comment" placeholder="Add Pickup Comments"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ride-right">
                            <div class="common-row first-row bottom-border">
                                <div class="airport"><img src="<?php echo base_url(); ?>/assets/images/booking/icon_4.png">Choose Airport: JFK EWR LGA</div>
                            </div>
                            <div class="common-row second-row bottom-border">
                                <div colspan="2">
                                    <img src="<?php echo base_url(); ?>/assets/images/booking/icon_5.png">
                                    <select class="passenger">
                                        <option>Search For Pickup Address</option>
                                        <option>Country 2</option>
                                        <option>Country 3</option>
                                        <option>Country 4</option>
                                        <option>Country 5</option>
                                        <option>Country 6</option>
                                        <option>Country 7</option>
                                        <option>Country 8</option>
                                        <option>Country 9</option>
                                        <option>Country 10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="common-row third-row bottom-border">
                                <div class="pick-date">
                                    <img class="calender-img" src="<?php echo base_url(); ?>/assets/images/booking/icon_7.png">
                                    <div class='input-group date' id='datetimepicker-ride'>
                                        <label>Drive Time(Est)</label>
                                        <input type="text" class="date-picker" placeholder="YYYY/MM/DD"/>
                                    </div>
                                </div>

                                <div class="pick-time">
                                    <label class="adh">As Directed Hourly</label>
                                </div>
                            </div>
                            <div class="common-row fourth-row">
                                <div >
                                    <img src="<?php echo base_url(); ?>/assets/images/booking/icon_8.png">
                                    <input type="text" class="form-control comment" placeholder="Add Pickup Comments"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid brown-color">
                <div class="row">
                    <div class="container">
                        <div class="next-step">
                            <h4>Next Step</h4>
                            <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="map-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68436.06048923!2d-74.04761800088724!3d40.70755539893427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1506333999345" width="600" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>

        </section>
        <?php $this->load->view('footer/footer') ?>
    </body>

</html>