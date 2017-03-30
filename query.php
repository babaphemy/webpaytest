
<?php include('head.php');?>
<body>

<div class="container">
	<!-- row 1: navigation -->
    <div class="row" style="text-align: center">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <h2>LANDING PAGE</h2>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">WEBPAY TEST</div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <div class="caption">
                                                            
                                <form method="post" action="incs/options.php">
                                    <fieldset class="form-group">
                                        <label for="formGroupExampleInput">Amount </label>
                                        <input type="text" class="form-control" value="" name="amount" id="amount" />
                                    </fieldset>
									<fieldset class="form-group">
                                        <label for="formGroupExampleInput">Reference</label>
                                        <input type="text" class="form-control" value="" name="ref" id="ref" />
                                    </fieldset>
									<fieldset class="form-group">
                                        <label for="formGroupExampleInput">Product ID</label>
                                        <input type="text" class="form-control" name="pdtid" id="pdtid" />
                                    </fieldset>
									<fieldset class="form-group">
                                        <label for="formGroupExampleInput">MAC</label>
                                        <input type="text" class="form-control" name="mac" id="mac" />
                                    </fieldset>
                                    <button type="submit" class="btn btn-info" data-toggle="tooltip" id="myquery">Query Now >></button>
                                </form>
								
								
								
								<hr />
								
								

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div> <!-- end container -->

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		$('a.btn-info').tooltip()
	</script>

	</body>
</html>