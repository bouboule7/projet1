<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="bootstrap.css"">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Bootstrap 4</h1>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Succes</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>

</br>

    <form>
        <div class="form-group">
            <label for="txtMail">eMail</label>
            <input type="email" class="form-control" id="txtMail" placeholder="eMail">
        </div>
        <div class="form-group">
            <label for="txtPassword">password</label>
            <input type="password" class="form-control" id="txtPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="txtFile">File Selection</label>
            <input type="file" id="txtFile">
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="User" aria-describedby="basic-addon1" aria-describedby="basic-addon2">
            <span class="input-group-addon" id="basic-addon2">22</span>
        </div>
    </form>
</body>
</html>