
        <aside id="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="footer-widget-title">Sitemap</h3>
                        <ul class="list-unstyled three_cols">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/calendar">Calendar</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/equality-and-diversity">Equality and Diversity</a></li>
                            <li><a href="https://wiki.57north.org.uk/">Wiki</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="footer-widget-title">Coms</h3>
                        <p>Mailing lists: 
                            <a href="https://lists.57north.org.uk/mailman3/hyperkitty/list/57north-discuss@lists.57north.org.uk/"  target="_blank">57north-discuss</a> 
                            and 
                            <a href="https://lists.57north.org.uk/mailman3/hyperkitty/list/57north-announce@lists.57north.org.uk/" target="_blank">57north-announce</a>.
                        </p>
                        <p>IRC: #57N on irc.libera.chat.</p>
                        <p>Location: 57North Hacklab, c/o Aberdeen Action on Disability, Suite H, Kettock Lodge, Innovation Park, Campus Two, Bridge of Don, Aberdeen AB22 8GU.</p>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </aside> <!-- footer-widgets -->

        <footer id="footer">
            <p style="max-width: 800px; margin: 0 auto;">&copy; 2013-<?php echo date("Y"); ?> <a href="mailto:contact@57north.org.uk">57North Hacklab Ltd.</a>. All rights reserved. 57North Hacklab Ltd. is a company registered in Scotland (No. SC470230). 57North and 57North Hacklab are trading names of 57North Hacklab Ltd.</p>
<p><a href="/hotpink" style="color: #FF69B4; margin-right: 10px;" class="pull-right"><b class="fa fa-square"></b></a></p>

        </footer>

    </div> <!-- boxed -->

    <div id="back-top">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>


    <!-- Scripts -->
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/app.js"></script>
    <script src="js/styleswitcher.js"></script>

    <script src="js/syntax/shCore.js"></script>
    <script src="js/syntax/shBrushXml.js"></script>
    <script src="js/syntax/shBrushJScript.js"></script>

    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>

    <!-- Full calendar -->
    <link rel='stylesheet' type='text/css' href='/fullcalendar/fullcalendar.css' />
    <script type='text/javascript' src='/fullcalendar/fullcalendar.js'></script>

<?php if ( isset($footerStuff) ) echo $footerStuff; ?>

</body>

</html>
