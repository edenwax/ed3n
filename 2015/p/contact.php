            <div id="pt-wrap">
                <div id="port-title">
                    <h1>Contact me</h1>
                    <!-- Trying to figure out some 'sort by' options to fill this space -->
                </div>
            </div>
        <div id="main-wrap">
                    <div id="contact-me">
                        <?php
                        $action=$_REQUEST['action'];
                        if ($action=="")    /* display the contact form */
                            {
                            ?>
                            <form  action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="submit" />
                                <div>
                                    <label>Name</label> <br />
                                    <input name="name" type="text" value="" size="30" />
                                </div>
                                <div>
                                    <label>Email</label> <br />
                                    <input name="email" type="text" value="" size="30" />
                                </div>
                                <div>
                                    <label>Message</label> <br />
                                    <textarea name="message"></textarea>
                                </div>
                                <input type="submit" value="Send" />
                            </form>
                            <?php
                            } 
                        else                /* send the submitted data */
                            {
                            $name=$_REQUEST['name'];
                            $email=$_REQUEST['email'];
                            $message=$_REQUEST['message'];
                            if (($name=="")||($email=="")||($message==""))
                                {
                                echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                                }
                            else{        
                                $from="From: $name<$email>\r\nReturn-path: $email";
                                $subject="Contacting Colin Berry | ed3n.me";
                                mail("44.forever@gmail.com", $subject, $message, $from);
                                echo "Thank you, your message has been sent.";
                                }
                            }  
                        ?> 
                    </div>
                    <div id="contact-other">
                        <div id="social">
                            <ul>
                                <li class="co-fb">
                                    <a href="http://facebook.com/piratebattles"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li class="co-tw">
                                    <a href="http://twitter.com/edenwax"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li class="co-rd">
                                    <a href="http://reddit.com/user/edenwax"><span class="fa fa-reddit"></span>
                                    </a>
                                </li>
                                <li class="co-yt">
                                    <a href="http://youtube.com/ed3nwax"><span class="fa fa-youtube"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div id="contact-about">
                            <p>Feel free to contact me if you need a web designer, someone to game with, you're bored, or if you need my help with something.</p>
                        </div>
                    </div>
                </div>