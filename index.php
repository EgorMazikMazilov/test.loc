
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="public/css/cover.css" rel="stylesheet">
</head>

<div class="container">
    <div class="">
        <div class="col-md-12">

            <div class="text-center">
                <h1>Поиск репозиториев</h1>
            </div>
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-md-12 text-center">
                <form>
                    <div class="form-row">

                        <div class="col">
                            <select name="select[]" class="form-control" id="field">
                                <option value="" selected disabled>Field ...</option>
                                <option value="size" >Size</option>
                                <option value="forks" n>Forks</option>
                                <option value="stars" >Stars</option>
                                <option value="followers">Followers</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="select2[]" class="form-control" id="operator">
                                <option value="" selected disabled>Operator ...</option>
                                <option value=">" > > </option>
                                <option value="<" > < </option>
                                <option value="=" > = </option>
                            </select>
                        </div>
                        <div class="col value-field">
                                <input name="select3[]" type="text" class="form-control" id="value" placeholder="Value">
                        </div>
                            <div class="addInput"></div>

                        <div class="col-2">
                            <button type="button" class="btn btn-danger delbutton">Delete</button>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row ">
                        <div class="col-md-1">
                            <button type="button" class="btn btn-info" id="apply">Apply</button>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-warning clearbutton">Clear</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success float-right addbutton">Add Rule</button>
                        </div>
                    </div><!-- /form-row -->

                <p id="results"></p>

            </form>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</div> <!-- end container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="public/js/jquery-3.1.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="public/js/common.js" type="text/javascript"></script>

</body>
</html>
