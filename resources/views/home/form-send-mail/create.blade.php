<div id="thanks-message" class="alert alert-success d-none">شكراََ لتواصلك معنا 😊</div>

<form action="{{route('home.handelSendBusinessMail')}}" method="post">
    @csrf
    <div class="row gy-4">

        <div class="col-md-6">
            <input type="text" value="{{old('name')}}" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="الاسم" required>
        </div>

        <div class="col-md-6 ">
            <input type="tel" value="{{old('phone_number')}}" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="رقم الهاتف" required>
        </div>

        <div class="col-md-6">
            <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="البريد الإلكتروني" required>
        </div>

        <div class="col-md-6">
            <input type="text" value="{{old('comp_name')}}" name="comp_name" class="form-control @error('comp_name') is-invalid @enderror" placeholder="اسم الشركة" required>
        </div>

        <div class="col-md-12">
            <select name="target_segment" class="form-select mb-3 @error('target_segment') is-invalid @enderror" aria-label=". example">
                <option selected disabled> اختر الشريحة </option>
                <option  value="الشريحة الأولى">
                    الشريحة الأولى
                </option>
                <option value="الشريحة الثانية">
                    الشريحة الثانية
                </option>
                <option value="الشريحة الثالثة">
                    الشريحة الثالثة
                </option>
                <option value="الشريحة الرابعة">
                    الشريحة الرابعة
                </option>
                <option value="الشريحة الخامسة">
                    الشريحة الخامسة
                </option>
                <option value="الشريحة السادسة">
                    الشريحة السادسة
                </option>

            </select>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit">
                إرسال
            </button>
        </div>
    </div>
</form>
