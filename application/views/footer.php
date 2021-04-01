
            <div class="footer">
                <div class="pure-menu pure-menu-horizontal" hidden>
                    <ul>
                        <li class="pure-menu-item" ><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    /*
	let input = document.getElementById( 'file-upload' );
	let infoArea = document.getElementById( 'file-upload-filename' );
	input.addEventListener( 'change', showFileName );
	function showFileName( event ) {
	  let input = event.srcElement;
	  let fileName = input.files[0].name;
	  infoArea.textContent = 'File name: ' + fileName;
	}
    */
</script>
<script type="text/javascript" src="<?php echo base_url ('theme/assets/js/app.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url ('theme/assets/js/toastr.min.js'); ?>"></script>

<?php 
if (isset ($script)) {
    echo $script;
}
?>
</body>
</html>