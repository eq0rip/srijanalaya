<div class="newsletter-popup" onclick="close_msg();">
    
        <!--START Scripts : this is the script part you can add to the header of your theme-->
        <script type="text/javascript" src="http://localhost/srijanalaya/wp-includes/js/jquery/jquery.js?ver=2.6.19"></script>
        <script type="text/javascript" src="http://localhost/srijanalaya/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.6.19"></script>
        <script type="text/javascript" src="http://localhost/srijanalaya/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.6.19"></script>
        <script type="text/javascript" src="http://localhost/srijanalaya/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.19"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://localhost/srijanalaya/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
            /* ]]> */
        </script>
        <script type="text/javascript" src="http://localhost/srijanalaya/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.6.19"></script>
        <!--END Scripts-->

    <div class="modal-container">
        <div class="row">
            <div class="close-newsletter"> <i class="fa fa-close"></i> </div>
            <h1>Signup For News Letter</h1>

        
            <div class="widget_wysija_cont html_wysija">
            <div id="msg-form-wysija-html56507e429e40d-1" class="wysija-msg ajax"></div>
            <form id="form-wysija-html56507e429e40d-1" method="post" action="#wysija" class="widget_wysija html_wysija">
            <div class="form-footer">
                
                <p class="wysija-paragraph">
                    <span class="wysija-required">

                    <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email"  value="" placeholder="Enter your Email"/>
                    </span>


                    <span class="abs-req">
                        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
                    </span>

                </p>
                <input class="wysija-submit wysija-submit-field button" type="submit" value="Subscribe" />
            </div>

                <input type="hidden" name="form_id" value="1" />
                <input type="hidden" name="action" value="save" />
                <input type="hidden" name="controller" value="subscribers" />
                <input type="hidden" value="1" name="wysija-page" />


                <input type="hidden" name="wysija[user_list][list_ids]" value="1" />

            </form>
        </div>
    </div>
    </div>
    <div class="transbg_popup" style="display: block;"></div>
</div>