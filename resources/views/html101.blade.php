<!-- file: resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>HTML 101</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Chakra Petch', sans-serif;
            }
    </head>
    <body>
        <style>
            h1 { color: purple; }
        </style>
        <div class="container mt-4">
            <h1> HTML 101 </h1>
            <form>
                <div class="row">
                    <div class="col-sm-12 col-md-4"> 
                        <label for="fname"> ชื่อ </label>
                    </div>
                    <div class="col">
                        <input class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4"> 
                        <label for="fname"> สกุล </label>
                    </div>
                    <div class="col">
                        <input class="form-control">
                    </div>
                </div>
            </form>
        </div>
        <h1>Welcome to HTML 101</h1>
        <h1 style ="color:blue;">HTML 101</h1>
        <h2>This is a subheading</h2>
        <h3>This is a smaller heading</h3>
        <hr />
        <h2>Text Formatting</h2>
        <hr>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <td>ชื่อ</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>สมชาย</td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>สมหญิง</td>
                </tr>
            </tbody>
        </table>


    </body>
</html>