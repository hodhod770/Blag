<div class="container contact-form">
    <div class="contact-image">
        <img src="logo3.jpg" alt="rocket_contact" />
        <img src="logo4.jpg" alt="rocket_contact" />

    </div>
    
    <form wire:submit='Stor' method="post">
        <h3 class="ibm-plex-sans-arabic-bold">الابلاغ عن نشاط تحريضي</h3>
        <div class="row">
            <div class="col-md-6">
                {{-- <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="اكتب اسمك (اختياري)"
                        value="" />
                </div> --}}
                <div class="form-group">
                <label style="width: 100%; text-align: start" for="">رابط الدخول الى النشور المعادي</label>

                    <input  type="text" wire:model='link' name="link" class="form-control" placeholder="ادخل الرابط"
                        value="" />
                </div>
                <div class="form-group" x-data="{ uploading: false, progress: 0 }"
                x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false"
                x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label style="width: 100%; text-align: start" for="">اختيار صورة المنشور التحريضي</label>
                    <input type="file"  wire:model.live='image' name="image" class="form-control" placeholder="صورة المنشور المعادي"
                        value="صورة المنشور" />
                        <div x-show="uploading">
                            <progress class="form-control" max="100" x-bind:value="progress"></progress>
                        </div>
                </div>
                <div class="form-group">
                    <input type="submit"  name="btnSubmit" class="btnContact" value="ارسال البلاغ" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for=""  style="width: 100%; text-align: start">تفاصيل اضافية </label>
                    <textarea name="txtMsg"  wire:model='details' class="form-control" placeholder="تفاصيل" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>