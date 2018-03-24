<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        DB::table('providers')->insert([
            [
                'name'=>'Công Ty TNHH SX TM DV Trường Nam',
                'logo'=>'http://logo.trangvangvietnam.com/L39572230700.gif',
                'address'=>'63/12 Đỗ Nhuận, P. Sơn Kỳ, Q. Tân Phú, Tp. Hồ Chí Minh (TPHCM), Việt Nam',
                'phone'=>'0978 550 644',
                'website'=>'http://truongnam.com',
                'description'=>'<p><i>► Trường Nam hân hạnh mang đến cho thị trường các sản phẩm <u>quần áo thời trang may sẵn</u> đẹp mắt được thực hiện bởi các nhà thiết kế giỏi, tay nghề cao.</i>
<br>► Đón đầu xu hướng thông qua <u>các sản phẩm:</u> Áo sơ mi, áo thun, áo khoác, quần dài, quần short, quần kaki, quần jean,..
<br>Ngoài ra, nhận may và cho thuê Mascost theo yêu cầu
<br>Quần áo thời trang Trường Nam - Giá gốc tận xưởng, chất lượng hàng đầu.</p>',
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Cơ Sở Sản Xuất Và Phân Phối Thời Trang HT Jeans',
                'logo'=>'http://logo.trangvangvietnam.com/L39571577200.gif',
                'address'=>'Số 337/5B Đ. Thạch Lam, P. Phú Thạch, Q. Tân Phú, Tp. Hồ Chí Minh (TPHCM), Việt Nam',
                'phone'=>'0964 131 189 - 0915 789 136',
                'website'=>'http://htjeans.com',
                'description'=>'<p>➤➤➤ Cơ sở Sản xuất và Phân phối Quần Jeans thời trang uy tín tại Việt Nam:<br>
- <i><u>Đa dạng sản phẩm</u></i>: Quần Jean nam, quần jean nữ, quần áo thời trang,..<br>
- <i><u>Cam kết</u></i>: Chất lượng và mẫu mã đảm bảo yêu cầu - Giá thành cạnh tranh<br>
Để biết thêm thông tin chi tiết, liên hệ ngay Hotline: <u>0964 131 189</u></p>',
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Công Ty Cổ Phần Trung Hiếu',
                'logo'=>'http://logo.trangvangvietnam.com/L21291600-1.gif',
                'address'=>'Số 131B/66 Đường Ngọc Lâm, P. Ngọc Lâm, Q. Long Biên, Hà Nội, Việt Nam',
                'phone'=>'(024) 36501661, Hotline: 091 5119783',
                'website'=>'http://trunghieufashion.vn',
                'description'=>'<p><i>Trung Hiếu Fashion − Thế giới thời trang VNXK</i><br>Chuyên cung cấp sỉ/ lẻ quần áo hàng VNXK cho:<br>→ Nữ giới: áo dệt kim, chân váy, váy liền, quần âu, quần jeans, áo phao, áo dạ…<br>→ Nam giới: áo phông, áo sơ mi, quần kaki, quần jeans<br>→ Trẻ em: váy, áo gile, áo khoác dạ<br>Và rất nhiều sản phẩm khác đang chờ đón bạn tại facebook Trung Hieu Fashion!<br>Hoặc hãy liên hệ với chúng tôi để nhận tư vấn chi tiết theo số “0913 516 819”.</p>',
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Công Ty TNHH Mỹ Anh',
                'logo'=>'http://logo.trangvangvietnam.com/L2443600.gif',
                'address'=>'Km 18.5 QL 32, X. Đức Thượng, Hoài Đức, Hà Nội, Việt Nam',
                'phone'=>'(024) 33664755',
                'website'=>'http://myana.com.vn',
                'description'=>'<p><i><b>Công Ty TNHH Mỹ Anh</b> chuyên sản xuất hàng may, thêu công nghiệp xuất khẩu gồm:<br></i>
- Cờ Quốc Gia, cờ Quốc Tế chất lượng tiêu chuẩn Bắc Âu xuất đi Đan Mạch<br>
-  Quần, áo sơ mi xuất đi Malaysia<br>
- Quần áo thời trang dệt kim, Jacket cho thị trường Việt Nam<br>
☞ Công nhân Mỹ Anh được làm việc trong môi trường nhà xưởng rộng rãi, môi trường lao động tốt, có nhà ăn, nhà ở tập thể đủ tiện nghi.
<br>☞ Phương châm của chúng tôi:  "<b>Tích cực – trung thực – thân thiện - cùng phát triển".</b></p>',
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Xưởng Gia Công May Mặc - Cơ Sở May Mặc Đồng Phục Minh Lên',
                'logo'=>'http://logo.trangvangvietnam.com/L39571914000-1.gif',
                'address'=>'5/45 Phan Huy Ích, P. 5, Q. Tân Bình, Tp. Hồ Chí Minh (TPHCM), Việt Nam',
                'phone'=>'01238380045, 0916 352 030',
                'website'=>'http://cosominhlen.com',
                'description'=>'<<p>♨ <i>cosominhlen.com - Giải Pháp Chọn Đồng Phục Cho Doanh Nghiệp</i>
<br>Đơn vị chuyên nhận <u>Thiết kế &amp; May đo Đồng Phục</u> theo đơn đặt hàng của các đơn vị, công ty, doanh nghiệp, nhà máy,.. gồm các loại:
<br>- Áo thun đồng phục 
<br>- Đồng phục gia đình, thể thao
<br>- Đồng phục công sở, văn phòng, công ty
<br>- Đồng phục lớp, mẫu giáo, học sinh, sinh viên
<br>- Đồng phục bảo vệ, công nhân
<br>- Đồng phục nhà hàng, khách sạn, spa,..
<br>➡ Minh Lên: Tinh tế trong thiết kế - Chất lượng trên từng đường chỉ.</p>',
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
        ]);
    }
}
