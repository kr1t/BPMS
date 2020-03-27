<div class="form-group {{ $errors->has('urine_color') ? 'has-error' : ''}}">
    <label for="urine_color" class="control-label">{{ 'สีปัสสาวะ' }}</label>
    <select name="urine_color" class="form-control" id="urine_color" required>
    @foreach (json_decode('{"1":"\u0e2a\u0e35\u0e1b\u0e01\u0e15\u0e34","2":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e40\u0e02\u0e49\u0e21","3":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e1b\u0e19\u0e40\u0e25\u0e37\u0e2d\u0e14"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->urine_color) && $check->urine_color == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('urine_color', '<p class="help-block">:message</p>') !!}

    <div class="pt-2" id="urine_color-2">
        <div class="alert alert-warning" role="alert">
  การดื่มน้ำน้อยเกินไป แต่ไม่ถือว่ามีอันตราย เพียงแค่ควรดื่มน้ำเพิ่มนอกจากนั้นอาจเกิดจากอาจเกิดจากยาหรืออาหารที่ผสมวิตามินบี
    </div>
    </div>

      <div class="pt-2" id="urine_color-3">
        <div class="alert alert-danger" role="alert">
  มีเม็ดเลือดแดงในเส้นเลือดแตกมากกว่าปกติ  มีเลือดออกบริเวณทางเดินปัสสาวะซึ่งเป็นอาการของโรคต่างๆ เช่น นิ่ว เนื้องอก
การติดเชื้อทางเดินระบบปัสสาวะ หรือกระเพาะปัสสาวะอักเสบ
**ควรรีบไปพบแพทย์เพื่อตรวจร่างกาย**"
        </div>
    </div>

</div>

<div class="form-group {{ $errors->has('skin') ? 'has-error' : ''}}">
    <label for="skin" class="control-label">{{ 'ผิวหนัง' }}</label>
    <select name="skin" class="form-control" id="skin" required>
    @foreach (json_decode('{"1":"\u0e1c\u0e34\u0e27\u0e1b\u0e01\u0e15\u0e34","2":"\u0e1c\u0e34\u0e27\u0e41\u0e2b\u0e49\u0e07\u0e01\u0e23\u0e49\u0e32\u0e19","3":"\u0e1c\u0e34\u0e27\u0e21\u0e31\u0e19"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->skin) && $check->skin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('skin', '<p class="help-block">:message</p>') !!}

       <div class="pt-2" id="skin-2">
        <div class="alert alert-warning" role="alert">
เกิดจากชั้นปกป้องผิวที่อ่อนแอมากกว่าปกติ และมีแนวโน้มแพ้ง่ายไวต่อการระคายเคือง ซึ่งเมื่อสัมผัสกับปัจจัยที่เป็นตัวกระตุ้นอาจส่งผลให้เกิดอาการขึ้นได้
การดูแลรักษา: การทาโลชั่น หรือ ออยล์ให้กับผู้ป่วย ควรเป็นโลชั่นสำหรับเด็ก เพื่อผิวที่อ่อนโยนและผิวแพ้ง่าย    </div>
    </div>

      <div class="pt-2" id="skin-3">
        <div class="alert alert-danger" role="alert">
 อาจจะบ่งว่ามีตับอักเสบ หรือ การอุดตันของทางเดินน้ำดีซ่อนอยู่
หากสังเกตว่าผิวเริ่มเหลืองให้ลองมองดูที่ตาขาว หากตาขาวเปลี่ยนเป็นสีเหลืองด้วย รวมทั้งอุจจาระมีสีซีดลง
**ให้ปรึกษาแพทย์ทันที**
        </div>
    </div>

</div>

<div class="form-group {{ $errors->has('caneat') ? 'has-error' : ''}}">
    <label for="caneat" class="control-label">{{ 'การทานอาหาร' }}</label>
    <select name="caneat" class="form-control" id="caneat" required>
    @foreach (json_decode('{"1":"ผู้ป่วยทานอาหารเองได้","2":"ผู้ป่วยใส่สายอาหาร"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->skin) && $check->skin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('caneat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('food_type') ? 'has-error' : ''}}" id="food_type_group">
    <label for="food_type" class="control-label">{{ 'ประเภทอาหารของผู้ป่วยใส่สายอาหาร' }}</label>
    <select name="food_type" class="form-control" id="food_type" >
    @foreach (json_decode('{"1":"\u0e19\u0e21","2":"\u0e1c\u0e31\u0e01+\u0e19\u0e21","3":"\u0e1c\u0e31\u0e01+\u0e44\u0e02\u0e48"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->food_type) && $check->food_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('food_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('respiratory_system') ? 'has-error' : ''}}">
    <label for="respiratory_system" class="control-label">{{ 'ระบบการหายใจ' }}</label>
    <select name="respiratory_system" class="form-control" id="respiratory_system" >
    @foreach (json_decode('{"1":"\u0e2b\u0e32\u0e22\u0e43\u0e08\u0e44\u0e14\u0e49\u0e40\u0e2d\u0e07","2":"\u0e21\u0e35\u0e40\u0e04\u0e23\u0e37\u0e48\u0e2d\u0e07\u0e0a\u0e48\u0e27\u0e22\u0e2b\u0e32\u0e22\u0e43\u0e08","3":"\u0e40\u0e08\u0e32\u0e30\u0e04\u0e2d"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->respiratory_system) && $check->respiratory_system == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('respiratory_system', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bedsore') ? 'has-error' : ''}}">
    <label for="bedsore" class="control-label">{{ 'แผลกดทับ' }}</label>
    <select name="bedsore" class="form-control" id="bedsore" >
    @foreach (json_decode('{"1":"\u0e01\u0e49\u0e19","2":"\u0e02\u0e49\u0e2d\u0e28\u0e2d\u0e01","3":"\u0e02\u0e49\u0e2d\u0e40\u0e17\u0e49\u0e32"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->bedsore) && $check->bedsore == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('bedsore', '<p class="help-block">:message</p>') !!}
<div class="pt-2">
 <div class="alert alert-secondary" role="alert">
  ระยะที่ 1 แผลกดทับระยะนี้จะไม่เปิดออก มีลักษณะอุ่น นุ่มหรือแข็ง ผู้ป่วยอาจรู้สึกเจ็บและระคายเคือง ผิวหนังบริเวณแผลจะไม่มีสี ผู้ที่มีผิวขาวอาจเกิดรอยแดง
ส่วนผู้ที่มีผิวเข้มอาจเกิดสีเขียวอมม่วง เมื่อกดลงไปบนแผล แผลจะไม่กลายเป็นสีขาว <hr>
ระยะที่ 2 แผลกดทับระยะนี้เป็นแผลเปิดหรือมีแผลตุ่มน้ำพอง เนื่องจากหนังกำพร้าบางส่วนและหนังแท้ถูกทำลาย ส่งผลให้ผิวหนังหลุดลอก ผู้ป่วยอาจรู้สึกเจ็บที่แผลมากขึ้น<hr>
ระยะที่ 3 แผลจะมีลักษณะเป็นโพรงลึก ซึ่งอาจเห็นไขมันที่แผล เนื่องจากผิวหนังทั้งหมดหลุดออกไป รวมทั้งเนื้อเยื่อที่อยู่ลึกลงไปในชั้นผิวหนังถูกทำลาย<hr>
ระยะที่ 4 แผลกดทับระยะนี้ถือว่าร้ายแรงที่สุด โดยผิวหนังทั้งหมดถูกทำลายอย่างรุนแรง รวมทั้งเนื้อเยื่อที่อยู่ล้อมรอบเริ่มตายหรือที่เรียกว่าเนื้อเยื่อตายเฉพาะส่วน (Tissue Necrosis) กล้ามเนื้อและกระดูกที่อยู่ลึกลงไปอาจถูกทำลายด้วย
การดูแลรักษา: เช็ดแผลด้วยน้ำเกลือทุกวัน วันละ 2 ครั้ง ทายาสำหรับแผลกดทับอย่างสม่ำเสมอ หากเกิดแผลที่ใหญ่ขึ้นโปรดแจ้งพยาบาลผู้ดูแลทันที เพื่อพยาบาลได้เตรียมยาและการรักดูแลรักษา

</div>
</div>

</div>
<div class="form-group {{ $errors->has('phlegm') ? 'has-error' : ''}}">
    <label for="phlegm" class="control-label">{{ 'เสมหะ' }}</label>
    <select name="phlegm" class="form-control" id="phlegm" >
    @foreach (json_decode('{"1":"\u0e2a\u0e35\u0e43\u0e2a\u0e1b\u0e01\u0e15\u0e34","2":"\u0e2a\u0e35\u0e40\u0e2b\u0e25\u0e37\u0e2d\u0e07\u0e2d\u0e48\u0e2d\u0e19","3":"\u0e2a\u0e35\u0e40\u0e02\u0e35\u0e22\u0e27"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->phlegm) && $check->phlegm == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('phlegm', '<p class="help-block">:message</p>') !!}

          <div class="pt-2" id="phlegm-2">
        <div class="alert alert-warning" role="alert">
อาจเกิดจากโรคหวัดหรือภูมิแพ้ที่มีความรุนแรงกว่าปกติ
จนทำให้ร่างกายผลิตเซลล์เม็ดเลือดขาวเพิ่มขึ้น และส่งไปในโพรงจมูกเพื่อต่อสู้กับการติดเชื้อ ในเซลล์เม็ดเลือดขาวจะมีสารชื่อ Neutrophils ซึ่งสามารถทำให้เสมหะเปลี่ยนเป็นสีเหลืองหรือเขียวได้     </div>
    </div>

      <div class="pt-2" id="phlegm-3">
        <div class="alert alert-danger" role="alert">
 มักเป็นสัญญาณว่ามีเลือดปนอยู่ในเสมหะด้วย โดยทั่วไปแล้วการมีเลือดอยู่ในเสมหะมักเป็นผลจากการระคายเคืองและการแห้งของเนื้อเยื่อ ในทางเดินหายใจ ซึ่งเกิดจากการถู เช็ด หรือสั่งน้ำมูกมากเกินไป แม้การมีเลือดปนในเสมหะจะไม่ใช่เรื่องที่ต้องกังวล แต่ถ้าพบว่ามีเลือดออกมาก
**ควรปรึกษาแพทย์ทันที** เพราะอาจเป็นสัญญาณของการติดเชื้อที่รุนแรง เช่น หลอดลมอักเสบ
        </div>
    </div>
</div>



<div class="form-group {{ $errors->has('eyes') ? 'has-error' : ''}}">
    <label for="eyes" class="control-label">{{ 'ดวงตา' }}</label>
    <select name="eyes" class="form-control" id="eyes" required>
    @foreach (json_decode('{"1":"ตอบสนองได้ปกติ","2":"ตอบสนองได้ช้า แต่ยังสามารถมองตามได้","3":"อื่นๆ....."}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->skin) && $check->skin == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('eyes', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('mouth') ? 'has-error' : ''}}">
    <label for="mouth" class="control-label">{{ 'ปาก' }}</label>
    <select name="mouth" class="form-control" id="mouth" required>
    @foreach (json_decode('{"1":"สนทนาได้ปกติ","2":"เจาะคอไม่สามารถสนทนาได้","3":"อื่นๆ....."}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->mouth) && $check->mouth == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('mouth', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('muscles') ? 'has-error' : ''}}">
    <label for="muscles" class="control-label">{{ 'กล้ามเนื้อแขน-ขา' }}</label>
    <select name="muscles" class="form-control" id="muscles" required>
    @foreach (json_decode('{"1":"กล้ามเนื้อแขนขาใช้งานได้ปกติ","2":"กล้ามเนื้อแขนขาอ่อนแรง","3":"กล้ามเนื้อแขนขาไม่สามารถใช้งานได้"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->muscles) && $check->muscles == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('muscles', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('handling') ? 'has-error' : ''}}">
    <label for="handling" class="control-label">{{ 'การหยิบจับ' }}</label>
    <select name="handling" class="form-control" id="handling" required>
    @foreach (json_decode('{"1":"สามารถหยิบจับสิ่งของทานอาหารด้วยตัวเองได้","2":"สามารถหยิบจับสิ่งของได้บ้างกล้ามเนื้อมืออ่อนแรง","3":"ไม่สามารถหยิบจับสิ่งของได้เลยช่วยเหลือตัวเองไม่ได้เลย"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($check->muscles) && $check->muscles == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('handling', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
     <label for="">อื่นๆ</label>
     <textarea class="form-control" name="note" id="" rows="3"></textarea>
   </div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'อัพเดท' }}">
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('#food_type_group').hide();
    $('#caneat').change(function(){
        console.log($(this).val());
        if($(this).val()==2){
            $('#food_type_group').show();
        }else{
            $('#food_type_group').hide();
        }
    });


    ['urine_color','skin','phlegm'].forEach(el=>{
        var hideAll = () =>{
         $(`#${el}-2`).hide()
         $(`#${el}-3`).hide()
        }
        hideAll()
        $(`#${el}`).change(function(){
            if($(this).val()==2){
                $(`#${el}-2`).show()
                $(`#${el}-3`).hide()
            }
            else if($(this).val()==3){
                $(`#${el}-3`).show()
                $(`#${el}-2`).hide()
            }else{
                hideAll()
            }
        });
    });

});
</script>
