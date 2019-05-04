<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;
use Carbon\Carbon;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Event::create([
            'travel_id' => 1,
            'name' => 'Lẩu bia',
            'place' => 'Phố bia Tạ Hiện',
            'topic' => 'ẩm thực',
            'content' => 'Phố Tạ Hiện nằm trong trung tâm phố cổ Hà Nội, nổi tiếng là con phốđông đúc với đặc sản bia cỏ cùng một không gian thoáng đãng, lộng gió. Cứ đến chiều tối, nơi đây lại trở thành địa điểm tụ tập của đông đảo mọi người từ sinh viên, người lao động và đặc biệt là những dân du lịch bụi đến từ nhiều nơi trên thế giới. 

Tạ Hiện - phố đêm giữa lòng Hà Nội

Mỗi ngày vào đúng giờ người người ngược xuôi tan tầm ở Thủ đô, cả phố Tạ Hiện bắt đầu lên đèn chào đón khách. Khách của “phố bia” rất đa dạng về lứa tuổi và quốc tịch, nghĩa là gồm cả khách ta khách tây, và cả sinh viên lẫn người đi làm. Đặc biệt về đêm, Tạ Hiện lúc nào cũng ồn ào tấp nập tiếng nói cười, tiếng reo hò hát ca nhộn nhịp. Ở Tạ Hiện, người ta không thể tìm thấy những quán bia cao tầng hay sang trọng, mà chỉ đơn giản là những hàng quán vỉa hè, thực khách ngồi túm tụm ngay phía trước cửa nhà, trên những chiếc ghế nhựa, với chiếc bàn đặt những cốc bia mát lạnh.',
            'start_time' => Carbon::create(2019,3,8),
            'end_time' => Carbon::now(),
         ]);
        \App\Models\Event::create([
            'travel_id' => 2,
            'name' => 'Dàn hotgirl The Face hội ngộ sự kiện khai trương Charles & Keith tại Royal City Hà Nội',
            'place' => 'Royal City',
            'topic' => 'văn hóa',
            'content' => 'Dàn hotgirl The face Khánh Linh và Đồng Ánh Quỳnh đã cùng tái ngộ tại sự kiện khai trương cửa hàng thứ 15 tại Vincom Mega Mall Royal City Hà Nội.

Thương hiệu thời trang phụ kiện Charles & Keith vừa chính thức khai trương cửa hàng thứ 15 tại Vincom Mega Mall Royal City Hà Nội với không gian sang trọng, thanh lịch mà bất kỳ cô nàng sành điệu nào cũng muốn bước vào. Sở hữu diện tích rộng lớn, các khu trưng bày của cửa hàng được sắp xếp phù hợp chủ đề, màu sắc và xu hướng theo từng bộ sưu tập của mỗi mùa, giúp khách hàng dễ dàng tìm được món đồ phụ kiện yêu thích.',
            'start_time' => Carbon::create(2019,4,8),
            'end_time' => Carbon::now(),
         ]);
        \App\Models\Event::create([
            'travel_id' => 3,
            'name' => 'Chùa Trấn Quốc được bầu chọn là một trong 10 chùa đẹp nhất thế giới',
            'place' => 'Chùa trấn quốc',
            'topic' => 'văn hóa',
            'content' => 'Chùa cổ Trấn Quốc ở Thủ đô Hà Nội, Việt Nam, từng được trang web chuyên về du lịch wanderlust.co.uk của Anh bầu chọn là một trong 10 ngôi chùa đẹp nhất trên thế giới.
            Theo bảng xếp hạng của wanderlust.co.uk, chùa Trấn Quốc đứng vị trí thứ 3 trong số 10 ngôi chùa có cảnh đẹp "không thể tin được". Giới thiệu về chùa Trấn Quốc, trang web này viết: "Nằm trên bán đảo nhỏ, phía Đông của hồ Tây, Trấn Quốc là ngôi chùa cổ nhất Hà Nội.

Ngôi chùa đã có trên 1.500 năm tuổi và gần đây được bầu chọn là một trong những ngôi chùa đẹp nhất thế giới. Khung cảnh hồ nước tạo cho ngôi chùa sự hấp dẫn, và khách đến được trao hương để thắp trong các đền nhỏ ở cả khu chùa này.

Bạn hãy chú ý đến cây bồ đề. Cây này mọc ra từ một nhánh lấy từ chính cây gốc ở Boh Gaya bên Ấn Độ, nơi mà Đức Phật đã ngồi tu và đạt Giác ngộ".

Trang wanderlust.co.uk mô tả khung cảnh hồ nước tạo cho chùa Trấn Quốc sự hấp dẫn. Theo trang web này, một ngôi chùa chỉ đẹp nếu hài hòa với môi trường xung quanh, dù là nơi đô thị hay núi non. Các chùa to nhưng trái với cảnh quan xung quanh, thiếu bề dày lịch sử cũng không lọt vào danh sách bình chọn này.',
            'start_time' => Carbon::create(2019,4,8),
            'end_time' => Carbon::now(),
         ]);
        \App\Models\Event::create([
            'travel_id' => 4,
            'name' => 'Lễ hội ẩm thực',
            'place' => 'hàng buồm',
            'topic' => 'ẩm thực',
            'content' => 'Dù mới bắt đầu đi vào hoạt động từ ngày 19/9 nhưng do hoạt động trùng với lịch chợ đêm Hà Nội nên khu phố ẩm thực Hàng Buồm đã nhanh chóng thu hút rất nhiều tín đồ ẩm thực nói chung và du khách quốc tế nói riêng.

Với hơn 40 quầy hàng nhưng đồ ăn tại đây lại khá đa dạng với đủ các món ăn truyền thống Việt Nam cho tới các món ăn nhẹ Á, Âu. Mỗi quầy hàng khá nhỏ nên các món ăn bán ở đây thường là loại đồ ăn có thể vừa đi, vừa ăn được. Tuy nhiên, các quán cũng có bàn ghế nếu khách muốn ngồi thưởng thức tại quán.

Tại khu phố ẩm thực Hàng Buồm, bạn có thể thoải mái lựa chọn từ các món ăn đậm chất Việt như chả ốc, xôi chim... cho tới các món Hàn như cơm cuộn hay tteokbokki, và đương nhiên là không thể thiếu được sự góp mặt của các món ăn vặt được giới trẻ ưa thích như khoai tây lốc xoáy, khoai chiên. Nếu không muốn ăn, thì các loại chè đa dạng hay nước ép trái cây sẽ là lựa chọn khá lý tưởng để vừa tản bộ, vừa có cái nhâm nhi. Đồ ăn ở đây có giá từ 20.000 đồng/ phần ăn, tuỳ loại, khá hợp lý.',
            'start_time' => Carbon::create(2019,4,8),
            'end_time' => Carbon::now(),
         ]);
        \App\Models\Event::create([
            'travel_id' => 5,
            'name' => 'Lễ báo công lăng Bác năm 2019',
            'place' => 'Điện Biên, Điện Bàn, Ba Đình, Hà Nội, Việt Nam',
            'topic' => 'văn hóa',
            'content' => 'Đến dự buổi lễ có Đồng chí Phương Kiến Quốc - Phó Bí thư Thường trực Quận ủy - Chủ tịch HĐND quận, cùng các đồng chí trong Ban Thường vụ Quận ủy.

Tiếp tục đổi mới phương thức tổ chức các hoạt động tình nguyện, thực hiện hiệu quả chủ đề công tác “Năm thanh niên tình nguyện”, thiết thực kỷ niệm 55 năm phong trào Ba sẵn sàng, 20 năm phong trào Thanh niên tình nguyện, 10 năm phong trào Tôi yêu Hà Nội, 40 năm cuộc chiến đấu bảo vệ biên giới phía Bắc, 50 năm thực hiện Di chúc của Chủ tịch Hồ Chí Minh và hưởng ứng hành trình “Tuổi trẻ Việt Nam nhớ lời di chúc theo chân Bác”.

Tại chương trình, Quận đoàn Cầu Giấy đã làm lễ báo công dâng Bác, trao 15 giấy chứng nhận thanh niên tình nguyện đăng ký lên đường nhập ngũ và tặng quà cho 64 tân binh, dâng hương tại đài tưởng niệm nghĩa trang liệt sỹ Bắc Sơn, thăm quan Bảo tàng quân sự Việt Nam gắn với các nội dung sự kiện, Di chúc của người.

Đồng chí Lê Thị Thu Trang - Ủy viên Ban thường vụ Thành đoàn, Bí thư Quận đoàn Cầu Giấy phát biểu: “Để đáp lại sự tin tưởng của Bác dành cho thanh niên, tiếp nối truyền thống dựng nước và giữ nước của cha ông ta, thế hệ thanh niên Thủ đô ngày nay nói chung và thanh niên quận Cầu Giấy nói riêng luôn phát huy vai trò xung kích, tình nguyện của tuổi trẻ được cụ thể hóa bằng những hành động, việc làm cụ thể, không ngừng nỗ lực, phấn đấu học tập và làm theo tấm gương, đạo đức, phong cách của Bác. Nhiều mô hình hay, cách làm sáng tạo, hiệu quả, mang đậm dấu ấn của thanh niên, tạo nên không khí thi đua sôi nổi của tuổi trẻ trên các mặt kinh tế, xã hội, quốc phòng - an ninh, bước đầu đã đạt được kết quả đáng khích lệ, tạo sức lan tỏa rộng rãi trong đoàn viên, thanh niên. Khắc họa hình ảnh thế hệ thanh niên thời đại mới, luôn trung thành và tin tưởng tuyệt đối vào sự lãnh đạo của Đảng, nêu cao lòng yêu nước và trách nhiệm công dân, dám dấn thân, tình nguyện vì cộng đồng, đến những nơi gian khổ, đảm nhận những khâu khó việc mới với ý chí quyết tâm xây dựng Thủ đô và đất nước ngày càng đàng hoàng hơn, to đẹp hơn”.',
            'start_time' => Carbon::create(2019,2,8),
            'end_time' => Carbon::now(),
         ]);
        \App\Models\Event::create([
            'travel_id' => 6,
            'name' => 'Concert in Việt Nam 2019 - Bonney M',
            'place' => 'Trung tâm Hội nghị Quốc gia Mỹ Đình, Phạm Hùng, Hà Nội',
            'topic' => 'ca nhạc',
            'content' => 'Các sự kiện ca nhạc, văn hóa nghệ thuật chào mừng ngày quốc tế phụ nữ 08/03/2019
 
Với những ai không thích không gian sôi động, nhộn nhịp tại phố đi bộ Hồ Gươm thì có thể cùng một nửa của mình tham gia những sự kiện âm nhạc, văn hóa nghệ thuật đặc sắc diễn ra vào ngày 8/3 như:',
            'start_time' => Carbon::create(2019,3,8),
            'end_time' => Carbon::now(),
         ]);
    }
}
