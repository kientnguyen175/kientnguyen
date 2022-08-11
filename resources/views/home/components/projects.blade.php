 <!-- CONTACT -->
 <article id="contact" class="isg-panel">
    <div class="isg-panel-inner" data-bordercolor="#782347">
        <!-- CLOSE ICON -->
        <div class="isg-panel-close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <!-- ROTATED TEXT -->
        <div class="isg-panel-rotated-text">
            <span class="isg-panel-rotated-text-inner">CONTACT</span>
        </div>
        <!-- UP ICON -->
        <div class="isg-panel-up">
            <span class="fa fa-arrow-circle-o-up"></span>
        </div>
        <!-- PANEL IMG -->
        <div class="isg-panel-img">
            <img src="images/photos/contact.jpg" alt="" />
        </div>
        <!-- PANEL CONTENT -->
        <h2>CONTACT ME</h2>
        <!-- TABLE -->
        <div class="isg-table">
            <div class="isg-table-row">
                <div>
                    <p><i class="fa fa-phone-square"></i> <strong>Phone</strong></p>
                    <p>+9234-435-4345</p>
                </div>
                <div>
                    <p><i class="fa fa-envelope"></i> <strong>E-mail</strong></p>
                    <p><a href="mailto:info@mysite.com">info@mysite.com</a></p>
                </div>
            </div>
            <div class="isg-table-row">
                <div>
                    <p><i class="fa fa-map"></i> <strong>Address</strong></p>
                    <p>John Kennedy Str. Brooklyn, NY 12938, United States</p>
                </div>
                <div>
                    <p><i class="fa fa-fax"></i> <strong>Fax</strong></p>
                    <p>+9234-435-4346</p>
                </div>
            </div>
        </div>
        <p>Quibusdam noster aut laborum despicationes. Malis appellat o enim tamen. O amet quibusdam. Magna occaecat ex coniunctione, quis in mentitum, multos excepteur offendit, id a dolore illum.</p>
        <hr/>
        <h2>DROP ME A LINE</h2>
        <!-- CONTACT FORM -->
        <form id="ajax-form" action="https://thememasters.club/html-templates/insurgent/mailer.php" method="post">
            <label>Full name</label>
            <input type="text" name="sendername" id="sendername" required="required" maxlength="50" />
            <label>Phone Number</label>
            <input type="text" name="senderphone" id="senderphone" maxlength="50" />
            <label>Email address</label>
            <input type="email" name="senderemail" id="senderemail" required="required" maxlength="50" />
            <label>Message</label>
            <textarea name="sendermessage" id="sendermessage" required="required"></textarea>
            <div class="submit-container">
                <input type="submit" class="isg-button" value="Send Message" /> <i id="ajax-spinner" class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
            </div>
        </form>
        <div id="form-messages"></div>
    </div>
</article>
