            </div>
            <!-- col-md-9 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</main>

<div class="footer">
    <div class="pure-menu pure-menu-horizontal" hidden>
        <ul>
            <li class="pure-menu-item" ><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
        </ul>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url ('theme/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url ('theme/assets/js/toastr.min.js'); ?>"></script>

<?php 
if (isset ($script)) {
    echo $script;
}
?>
</body>
</html>