<!DOCTYPE html>
<html>

<head>
  <title>Form Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body class="container">
  <div class="row mt-3">
    <div class="col-md-6">
    
      <form id="form" method="post" action="getData.php">
        <div class="form-group">
          <label for="code">ENTER CODE: </label>
          <input type="text" class="form-control" name="code" id="code">
        </div>
        <div class="form-group">
          <label for="index_no">ENTER INDEX NO: </label>
          <input type="text" class="form-control" name="index_no" id="index_no">
        </div>
        <div class="form-group">
          <label for="birth_cert">ENTER BIRTH CERTIFICATE</label>
          <input type="text" class="form-control" name="birth_cert" id="birth_cert">
        </div>
         
        <input type="submit" class="btn btn-primary" value="Submit" />
        <input type="reset" class="btn btn-primary" value="Reset" />
      </form>
    </div>
  </div>
</body>
<style>
  .error {
    color: red;
  }
</style>
<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        code: {
          required: true,
          number: true
        },
        index_no: {
          required: true,
          email: true
        },
        birth_cert: {
          required: true,
          rangelength: [0, 10],
          number: true
        },
        password: {
          required: true,
          minlength: 8
        },
        confirmPassword: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        contact: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        confirmPassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Confirm Password do not match with Password.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

</html>