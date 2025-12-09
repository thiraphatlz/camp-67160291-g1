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
        </style>
    </head>

    <body>
        
        <div class="container mt-4">
            <h1>Workshop #HTML-Form </h1>
            
            <form class="form-box">
                <div class="row mb-2">
                    <div class="col-6"> 
                        <label class="fname"> ชื่อ </label>
                    </div>
                    <div class="col">
                        <input class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6"> 
                        <label for="fname"> สกุล </label>
                    </div>
                    <div class="col">
                        <input class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <label for="dateofbirth"> วัน/เดือน/ปีเกิด </label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6"> 
                        <label for="fname"> อายุ </label>
                    </div>
                    <div class="col">
                        <input class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <label for="email"> เพศ </label>
                    </div>
                    <div class="col">
                        <input type="radio" id="man" name="gender" value="Man">
                        <label for="man">ชาย</label>

                        <input type="radio" id="woman" name="gender" value="Woman">
                        <label for="woman">หญิง</label>

                        <input type="radio" id="notprefer" name="gender" value="Notprefer">
                        <label for="notprefer">ไม่ระบุ</label>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <label for="myfile"> รูป </label>
                    </div>
                    <div class="col">
                <input type="file" class="form-control">
                    </div>
                </div>

                <div classs="row mb-2">
                    <div class="col-6">
                        <label for="address"> ที่อยู่ </label>
                    </div>
                    <div class="col">
                        <textarea class="form-control" rows="2" cols="20"></textarea><br>
                </div>
                
                
                <div class="row mb-2">
                    <div class="col-6">
                        <label for="favoritecolor"> สีที่ชอบ </label>
                    </div>
                    <div class="col">
                        <select class="form-select">
                            <option value="red"> แดง </option>
                            <option value="blue"> น้ำเงิน </option>
                            <option value="green"> เขียว </option>
                            <option value="yellow"> เหลือง </option>
                            <option value="black"> ดำ </option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <label for="songgenre"> แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input type="radio" id="forlife" name="genre" value="forlife">
                        <label for="forlife"> เพื่อชีวิต </label>

                        <input type="radio" id="country" name="genre" value="country">
                        <label for="forlife"> ลูกทุ่ง </label>

                        <input type="radio" id="hiphop" name="genre" value="hiphop">
                        <label for="forlife"> ฮิปฮอป </label>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <input type="checkbox"> ยินยอมให้เก็บข้อมูล
                    </div>
                </div>

                <br>

                <div style="text-align: left;">
                    <input type="reset" value="Reset">
                </div>

                <div style="text-align: center;">       
                    <input type="submit" value="Submit">
                </div>

            </form>
        </div>
        
    </body>
</html>