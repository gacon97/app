<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $category = Category::where('name','street')->get();
          \App\Models\Travel::create([
            'category_id' => App\Models\Category::all()->random()->id,
            'name' => 'Phố bia Tạ Hiện',
            'place' => 'Tạ Hiện',
            'feature' => 'Cứ vào thời điểm tối đến, khu phố bia Tạ Hiện này tấp nập hẳn lên, đa số họ là những bạn sinh viên, những người lao động cũng như những khách du lịch từ phương xa tìm đến.',
            'lat' => '21.035035',
            'lng' => '105.852183',
         ]);

         \App\Models\Travel::create([
                'category_id' => App\Models\Category::all()->random()->id,
                'name' => 'Royal City',
                'place' => 'Royal City',
                'feature' => 'Nếu muốn tìm đến những trung tâm thương mại nổi tiếng nhất ở Hà Nội vào buổi tối để vui chơi, trải nghiệm thì chắc chắn Royal City là địa điểm lý tưởng cho các bạn. Không gian Royal City khá rộng lớn, cách bày trí tạo sự sang trọng và hiện đại vô cùng. Tại đây cũng có nhiều trò chơi thú vị cho các bạn tìm đến, chẳng hạn như trò trượt băng, những trò chơi ở công viên nước hay những bộ phim hay tại rạp chiếu phim đạt tiêu chuẩn quốc tế.',
                'lat' => '21.002873',
                'lng' => '105.815268',
             ]);

              \App\Models\Travel::create([
                'category_id' => App\Models\Category::all()->random()->id,
                'name' => 'Chùa Trấn Quốc ở Hà Nội',
                'place' => 'Hồ Tây, Tây Hồ, Hà Nội, Việt Nam',
                'feature' => 'Ngôi chùa này đẹp với lối kiến trúc cổ kính, khá linh thiêng cho du khách tìm đến tham quan, trải nghiệm.',
                'lat' => '21.049698',
                'lng' => '105.837039',
             ]);

         \App\Models\Travel::create([
                'category_id' => App\Models\Category::all()->random()->id,
                'name' => 'phố ẩm thực Hàng Buồm',
                'place' => 'Hàng Buồm',
                'feature' => 'Khu phố này chỉ hoạt động về đêm, giờ mở cửa cụ thể: 19h30 và đóng cửa vào khoảng thời gian 0 giờ các ngày từ thứ 6 đến chủ nhật. Đồ ăn tại đây khá đa dạng và khá ngon, đa phần là những món ăn đặc sản Bắc Bộ nên rất được sự quan tâm, yêu thích của thực khách gần xa.',
                'lat' => '21.035486',
                'lng' => '105.851652',

             ]);

              \App\Models\Travel::create([
                'category_id' => App\Models\Category::all()->random()->id,
                'name' => 'Quảng Trường Ba Đình cùng Lăng Bác',
                'place' => 'Điện Biên, Điện Bàn, Ba Đình, Hà Nội, Việt Nam',
                'feature' => 'Quảng Trường Ba Đình rộng lớn, nổi tiếng, được biết đây từng là nơi Bác Hồ đọc tuyên ngôn độc lập, khai sinh ra nước Việt Nam nên rất có giá trị về mặt lịch sử, văn hóa dân tộc nên rất được khách du lịch gần xa yêu thích, tìm đến.',
                'lat' => '21.036996',
                'lng' => '105.834635',
             ]);
             
              \App\Models\Travel::create([
                'category_id' => App\Models\Category::all()->random()->id,
                'name' => ' Hồ Hoàn Kiếm',
                'place' => ' Hồ Hoàn Kiếm',
                'feature' => 'Hồ Hoàn Kiếm là một hồ nước lớn, khá đẹp nằm ở khu vực trung tâm thủ đô Hà Nội.',
                'lat' => '21.029005',
                'lng' => '105.852129',
             ]); 



    }
}
