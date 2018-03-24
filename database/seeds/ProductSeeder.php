<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $price = range(149000,399000,10000);
        $discount = range(9000,99000,10000);
        $sales= range(0,1000);
        DB::table('products')->insert([
            [
                'name'=>'Quần KAKI NAM',
                'alias'=>'quan-kaki-nam-co-gian',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>
                    ♦ Màu sắc:ĐEN, XANH ĐEN, KEM, RÊU, ĐỎ, VÀNG NÂU
                    ♦ Size: 26,27,28,29,30,31,32,33,34
                    HOTLINE: 0967.500.577 – 0964.940.288
                    Những chiếc quần  kaki nam với nhiều màu sác trẻ trung đang được nhiều bạn nam lựa chọn để thể hiện phong cách hiện đại của mình.
                    Quần kaki nam với thiết kế ống đứng giúp bạn thật tự tin và thoải mái khi xuống phố hay sánh bước bên những người thân yêu. Màu sắc nhã nhặn, đường chỉ chắc chắn, chất liệu vải thoáng mát. Bạn có thể dễ dàng kết hợp với tất cả loại áo như thun, sơ mi .. cùng một đôi giày, vài phụ kiện thích hợp để có 1 set đồ hoàn hảo
                    QUẦN CÔN KAKI CO DÃN SPORTMAN - Q101
                    - Chất liệu kaki mềm mại, luôn thông thoáng, đảm bảo cảm giác thoải mái, dễ chịu khi mặc.
                    - Form dáng ôm body khá dễ mặc, đường may tỉ mỉ, chắc chắn.
                    - Có thể mix linh hoạt với áo thun năng động dạo phố, hoặc sơ mi thanh lịch nơi công sở
                    </span>',
                'subcate_id'=>1,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'QUẦN KAKI KẺ CARO SPORTMAN',
                'alias'=>'quan-kaki-ke-caro-sportman',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>
                    ♦ Màu sắc:ĐEN, XANH ĐEN, KEM, RÊU, ĐỎ, VÀNG NÂU
                    ♦ Size: 26,27,28,29,30,31,32,33,34
                    HOTLINE: 0967.500.577 – 0964.940.288
                    Những chiếc quần  kaki nam với nhiều màu sác trẻ trung đang được nhiều bạn nam lựa chọn để thể hiện phong cách hiện đại của mình.
                    Quần kaki nam với thiết kế ống đứng giúp bạn thật tự tin và thoải mái khi xuống phố hay sánh bước bên những người thân yêu. Màu sắc nhã nhặn, đường chỉ chắc chắn, chất liệu vải thoáng mát. Bạn có thể dễ dàng kết hợp với tất cả loại áo như thun, sơ mi .. cùng một đôi giày, vài phụ kiện thích hợp để có 1 set đồ hoàn hảo
                    QUẦN CÔN KAKI CO DÃN SPORTMAN - Q101
                    - Chất liệu kaki mềm mại, luôn thông thoáng, đảm bảo cảm giác thoải mái, dễ chịu khi mặc.
                    - Form dáng ôm body khá dễ mặc, đường may tỉ mỉ, chắc chắn.
                    - Có thể mix linh hoạt với áo thun năng động dạo phố, hoặc sơ mi thanh lịch nơi công sở
                    </span>',
                'subcate_id'=>1,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'QUẦN JEAN XÁM RÁCH',
                'alias'=>'quan-jean-xam-rach',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>CÁCH CHỌN SIZE
Size 28 (Từ 40 - 48kg Cao Dưới 1m65)
Size 29 (Từ 49 - 54kg Cao Dưới 1m65)
Size 30 (Từ 55 - 59kg Cao Dưới 1m70) 
Size 31 ( Từ 60- 64kg Cao Dưới 1m75) 
Size 32 (Từ 65 - 70kg Cao Dưới 1m78)

VỀ SẢN PHẨM:
Sản phẩm được shop đặt may riêng với chất liệu VẢI DÀY và CO GIÃN tốt.
Màu vải được nhộm kỹ đảm bảo KHÔNG RA MÀU khi giặt.
Form quần chuẩn theo size việt nam ÔM BODY tôn vóc dáng.
Khi mua sản phẩm này  tại MŨI ĐÔI shop.
- Bạn sẽ được bao đổi bất kỳ sản phẩm nào khác của shop trong 
  vòng 2 tháng nếu không ưng ý với sản phẩm hiện tại.
- Bạn cũng có thể trả lại hàng nếu không thích mua nữa, shop cam 
  kết hoàn 100% tiền sản phẩm cho bạn.
- Hàng luôn có tại kho của shop nên thời gian giao hàng đến tay 
  các bạn cũng sẽ được ngắn đi rất nhiều.

Nếu có bất kỳ thắc mắc nào về sản phẩm của mình hãy  chat trực tiếp trên shopee 
Cảm ơn bạn đã xem sản phẩm của mình, chúc bạn một ngày mua sắm vui vẻ.. ..(^.^)……
</span>',
                'subcate_id'=>2,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'QUẦN JEAN NAM TRẮNG VÀ ĐEN 2 MÀU CƠ BẢN',
                'alias'=>'quan-jean-nam-trang-va-den-2-mau-co-ban',
                'price'=>  $price[rand(0,count($price)-1)],
                'discount'=>0,
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Quần jean nam mẫu mới cực kỳ hot 
Hàng thiết kế cao cấp dành cho các anh chàng sành điệu lịch lãm 
2 MÀU CƠ BẢN ĐEN VÀ TRẮNG 
Phối trang phục dễ dàng
Đơn giãn thanh lịch và sang trọng

Chất jean cotton dày mịn CO GIÃN tốt 
😍😍😍size 28 - 32
size 28 45-50kg
size 29 50-55kg
size 30 55-60kg 
size 31 60-65kg
size 32 65-70KG TÙY CHIỀU CAO

tùy thể trạng và sở thích mặc ôm hay thoải mái chọn size theo ý thích
bụng to nhảy 1 size nhé

- HÀNG LUÔN SẴN KHÁCH ĐẶT THOẢI MÁI KHÔNG LO HẾT SIZE ĐÂU Ạ

THEO DÕI SHOP để cập nhật thường xuyên những mẫu thời trang mới nhất, thịnh hành nhất với giá hợp lý nhất nhé

</span>',
                'subcate_id'=>2,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo thun Caro phối quần jean Skinny',
                'alias'=>'ao-thun-caro-phoi-quan-jean-skinny',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>0,
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Tất cả đều là hình thật mẫu chụp tại shop nên các bạn yên tâm nhé. Hình sao hàng như vậy nha.🏁🏁 TEE CARO &amp; Jean Skinny🏁🏁
🔴 Tee caro - Size: M L
Giá gốc: 230k --&gt; Gía ưu đãi: 184k
🔴 Jean Skinny - Size M L XL
Giá gốc: 400k --&gt; Gía ưu đãi: 320k
🔥🔥 Chia sẻ bài đăng hoặc check in tại shop để được áp dụng giá khuyến mãi
-----------------------------------------------------------
Các bạn có thể mua hàng tại VP STORE
🏠 Add: 934 Lạc Long Quân P.8 Q.Tân Bình 
📞 Tel: 0909 654 337
🔎 Fanpage: https://www.facebook.com/vpstorevn
</span>',
                'subcate_id'=>3,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo thun sweater phối quần jean skinny rách gối',
                'alias'=>'ao-thun-sweater-phoi-quan-jean-skinny-rach-goi',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>🏁🏁 Sweater &amp; Jean Skinny 🏁🏁
🔴 Sweater - Size M L XL
Giá gốc: 220k --&gt; Gía ưu đãi: 176k
🔴 Jean Skinny - Size M L XL
Giá gốc: 400k --&gt; Gía ưu đãi: 320k
🔥🔥 Chia sẻ bài đăng hoặc check in tại shop để được áp dụng giá khuyến mãi
-----------------------------------------------------------
Các bạn có thể mua hàng tại VP STORE
🏠 Add: 934 Lạc Long Quân P.8 Q.Tân Bình 
📞 Tel: 0909 654 337
🔎 Fanpage: https://www.facebook.com/vpstorevn
</span>',
                'subcate_id'=>3,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo thun nam sọc phối túi-hàng VNXK-hàng có sẵn',
                'alias'=>'ao-thun-nam-soc-phoi-tui-hang-vnxk-hang-co-san',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Áo thun sọc phối túi cao cấp.
hàng chuẩn VNXK
có 5 màu như hình
Chất vải mịn/mát cực kì. đảm bảo hàng đẹp và vải cực chất
size chuẩn từ 55kg tới 80kg TÙY CHIỀU CAO, CHAT VỚI SHOP ĐỂ ĐƯỢC TƯ VẤN SIZE
M: từ 55kg tới 65kg
L: từ 65kg tới 75kg
XL: từ 75kg tới 85kg
</span>',
                'subcate_id'=>3,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo Sơ Mi Nam, chất vải DENIM, dễ kết hợp với quần jean',
                'alias'=>'ao-so-mi-nam-chat-vai-denin-de-ket-hop-voi-quan-jean',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>☀☀☀ FREE SHIP+Follow Shop] Áo Sơ Mi Nam- Từ Lịch Lãm Đến Bụi Bặm,có nhiều màu chọn lựa, chất liệu vải DENIM, dễ kết hợp với quần jean [free ship] đơn hàng "180k" trở lên tại Shopee VN
☀  Áo sơ mi DENIM kết hợp giữa thời trang truyền thống và hiện đại tạo nên phong cách thời trang mới, độc lạ Từ Lịch Lãm Đến Bụi Bặm PhongTrần đầy chất MEN   
với Chất liệu jean Denim mềm, mát, thấm hút mồ hôi, fom dáng đẹp với những đường may tỉ mỉ. thật đơn giản dễ dàng kết hợp với nhiều loại trang phục khác.
♣ Size: S-M-L-XL
♣ Price: 350.000
♣ Màu : như trong hình ảnh  
♣ Giá = 345.000đ
☀☀☀ HÀNG CAM ĐOAN CHẤT LƯỢNG
☀☀☀ Chú ý : Khach đặt hàng nhắn tin đầy đủ :
➡ tên sp ( size , màu ...)
➡ mã (nếu có)
➡ địa chỉ 
➡ số điện thoại
➡ tên người nhận
☀☀☀ Ship hàng nội thành Hà Nội và toàn quốc
Chúng tôi cam kết về chất lượng sản phẩm ! Quý khách được kiểm tra hàng trước khi thanh toán !
The MBM SHOP MAN
☎️ HOTLINE: 09777 585 68
</span>',
                'subcate_id'=>4,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Từ Lịch Lãm Đến Bụi Bặm,có nhiều màu chọn lựa, chất liệu vải DENIM, dễ kết hợp với quần jean',
                'alias'=>'tu-lich-lam-den-bui-bam-co-nhieu-mau-chon-lua-chat-lieu-vai-denim-de-ket-hop-voi-quan-jean',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>0,
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>☀☀☀  Áo sơ mi DENIM kết hợp giữa thời trang truyền thống và hiện đại tạo nên phong cách thời trang mới, độc lạ Từ Lịch Lãm Đến Bụi Bặm PhongTrần đầy chất MEN   
với Chất liệu jean Denim mềm, mát, thấm hút mồ hôi, fom dáng đẹp với những đường may tỉ mỉ. thật đơn giản dễ dàng kết hợp với nhiều loại trang phục khác.
♣ Size: S-M-L-XL
♣ Price: 350.000
♣ Màu : như trong hình ảnh  
♣ Giá = 345.000đ
☀☀☀ HÀNG CAM ĐOAN CHẤT LƯỢNG
☀☀☀ Chú ý : Khach đặt hàng nhắn tin đầy đủ :
➡ tên sp ( size , màu ...)
➡ mã (nếu có)
➡ địa chỉ 
➡ số điện thoại
➡ tên người nhận
☀☀☀ Ship hàng nội thành Hà Nội và toàn quốc
Chúng tôi cam kết về chất lượng sản phẩm ! Quý khách được kiểm tra hàng trước khi thanh toán !
The MBM SHOP MAN
☎️ HOTLINE: 09777 585 68
</span>',
                'subcate_id'=>4,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo Khoác Dù CS Cổ cao hàn quốc HÌNH THẬT 100%',
                'alias'=>'ao-khoac-du-cs-co-cao-han-quoc-hinh-that-100%',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>0,
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Áo khoác Titishop màu xanh đen phối khóa kéo trắng được may từ chất liệu vải cao cấp, mềm mại, mang lại sự thoải mái trong suốt thời gian mặc. Áo có thiết kế trẻ trung và năng động, kết hợp cùng gam màu hiện đại, giúp người mặc tự do mix với nhiều trang phục khác, tự tin thể hiện gu thời trang riêng biệt.

    Chất liệu vải dù mềm mại, đường may bền chắc
    Thân trước phối dây kéo màu trắng nổi bật
    Kiểu dáng tay dài, có nón
    Kiểu dáng trẻ trung, năng động
    Sản xuất tại Việt Nam
    Size mẫu mặc: L. Số đo người mẫu: 94 - 75 - 98 - 180 (cm)
    Số đo người mẫu:
    94 - 75 - 98 - 180 (cm)
    Số đo sản phẩm mẫu mặc:
    Vai: 50cm, Ngực: 110cm, Dài: 69cm, Dài tay: 61cm, Rộng tay: 12cm</span>',
                'subcate_id'=>5,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Áo khoác dù dày trong lót vải gió cầu vai IG102 ĐEN',
                'alias'=>'ao-khoac-du-day-trong-lot-vai-gio-cau-vai-ig102-den',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>0,
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Lưu ý đầu tiên khi mua quần áo : Cùng kiểu mẫu nhưng giá và chất lượng mỗi nơi một khác, làm tốt mới khó chứ nếu làm rẻ thì quá đơn giản.

Các sản phẩm khác click http://shopee.vn/nguyenhaibk hoặc chat với shop qua shopee, zalo 0912.533.345 để được tư vấn nhanh nhất các mẫu còn hàng

Tất cả đều sản xuất tại Việt Nam

Khoác dù: Bên ngoài dù loại dày, bên trong lót vải gió màu đen



</span>',
                'subcate_id'=>5,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Giày Da Bò Cao Cấp',
                'alias'=>'giay-da-bo-cao-cap',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>$sales[rand(0,count($sales)-1)],
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Giày Da Bò Cao Cấp
👉Màu Sắc : Nâu Da bò/ Đen
👉Size: 39~44
👉Chất Liệu: Da Bò
👉Thương Hiệu: Play Boy
👉Xuất Xứ: Trung Quốc
👉Giày Cao Cấp từ chất liệu Da đến lót giày,đường may giày tinh tế,đẳng cấp,sang trọng,thu hút mọi ánh nhìn,tạo cho người sử dụng cảm giác thoải mái,tự tin,sải bước.
👉PLay Boy - Đôi giày đưa bạn đến với thành công!
</span>',
                'subcate_id'=>8,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],
            [
                'name'=>'Giày thể thao nam cao cấp',
                'alias'=>'giay-the-thao-nam-cao-cap',
                'price'=>$price[rand(0,count($price)-1)],
                'discount'=>$discount[rand(0,count($discount)-1)],
                'sales'=>0,
                'quantity'=>rand(1,100),
                'keywords'=>'',
                'description'=>'<span>Giày thể thao nam nike đế hơi mẫu mới
Khá nhẹ, form ôm, kiểu đơn giản nhưng vẫn rất thời trang nhé
Mix đồ siêu đẹp
Chạy bộ hay tập gym 
Đi học, đi làm đi chơi đều phù hợp nhé
tone màu cá tính
Size 39-44 
gia lẻ only 339k
- Hình tự chụp 100%, k qua chỉnh sửa màu hay gì hết nhé
- bảo hành 1  năm
-Giao hàng toàn quốc
Khach si 0898870107
</span>',
                'subcate_id'=>6,
                'provider_id'=>rand(1,5),
                'created_at'=>$faker->dateTimeBetween('-5 month'),
            ],

        ]);
    }
}


