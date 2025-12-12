@extends('template.dafault')

@section('title','Workshop')

@section('content')
            <form class="form-box">
                <div class="row mb-2">
                    <div class="col-6"> 
                        <label class="fname"> ชื่อ </label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control is-valid">
                        <div class="valid-feedback">
                            ถูกต้อง
                            </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                            </div>
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

                <div class="row mb-2">
                    <div style="text-align: left;">
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </div>

                <div class="col">
                    <div style="text-align: center;">       
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>

            </form>
@endsection

@push('scripts')
    <script>
        let clickMe = function() {
            let fname = document.getElementById('fname')
            // fname.value = "from clickMe"
            // console.log(fname.value);
            
            if(fname.value == "") {
                fname.classList.remove('is-valid');
                fname.classList.add('is-invalid');
            } else {
                fname.classList.remove('is-invalid');
                fname.classList.add('is-valid');
            }
        }

        let myfunc = (callback) =>{
            callback("in Callback");
        }

        callMe = (param) => {
            console.log(param);
        }

        myfunc(callMe);

        clickMe();

        let myvar = "1";
        let myvar2 = 2;
        myvar = parseInt(myvar);

        console.log(myvar + myvar2 + "\n\n\n\n\n test");
    </script>
@endpush