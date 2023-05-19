<html>
	<head>
		<title>Add Cust</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>	
        <link rel="stylesheet" href="stylee.css">
        <script src="script.js"></script>
	</head>
    <body>        
    <div class="container">		
            <form id="form-validation" method="POST" action="prosestambah.php" ><br>
                                    
                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First Name&emsp;</span>
                    </div>
                    <input type="text" name="firstname" class="form-control">
                </div>

                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Last Name&emsp;</span>
                    </div>
                    <input type="text" name="lastname" class="form-control">
                </div>

                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email &emsp;&emsp;&emsp;</span>
                    </div>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Phone&emsp;&emsp;&emsp;</span>
                    </div>
					<input type="number" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label for="comment">Alamat:</label>
                    <textarea class="form-control" rows="5" name="address" id="alamat"></textarea>
                </div>

                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Create_At</span>
                    </div>
					<input type="datetime-local" name="datetime" title="dd-mm-yyyy" class="form-control">
                </div>
            
                <button type="submit" name ="simpan" value="simpan" button type ="button" class="btn btn-primary">SIMPAN</button>
                <button type="reset" name ="reset" value="Reset" button type ="button" class="btn btn-danger">RESET</button>
                <a href="index.php" class="btn btn-dark">Back to Home</a>
            </form> 
        </div>
    </body>	

</html>