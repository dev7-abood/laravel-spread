<div>

    <div id="thanks-message" class="alert alert-success d-none">شكراََ لتواصلك معنا 😊</div>

    <form wire:submit.prevent="sendEmail">
        <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" wire:model="name" class="form-control  @error('name') is-invalid @enderror" placeholder="الاسم" required>
            </div>

            <div class="col-md-6 ">
                <input type="tel" class="form-control @error('telephone') is-invalid @enderror" wire:model="telephone" placeholder="رقم الهاتف" required>
            </div>

            <div class="col-md-6">
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control @error('comp_name') is-invalid @enderror" wire:model="comp_name" placeholder="اسم الشركة" required>
            </div>


            <div class="col-md-12">
                <select class="form-select mb-3 @error('target_segment') is-invalid @enderror" aria-label=". example" wire:model="target_segment">
                    <option selected disabled> اختر الشريحة </option>
                    <option value="الشريحة الأولى">
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
</div>
