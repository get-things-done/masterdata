<?php
namespace App\Actions\Masterdata;

use Lorisleiva\Actions\Concerns\AsAction;
use GetThingsDone\Masterdata\Models\Group;

class GenerateProvinces
{
    use AsAction;
    public function handle()
    {
        $group = Group::create([
            'code' => 'province',
            'name' => 'Tỉnh thành',
        ]);

        $group->elements()->createMany(
            array_map(
                fn($province) => ['name' => $province],
                $this->provinces()
            )
        );
    }

    protected function provinces(): array
    {
        return [
            'Hà Nội',
            'TP Hồ Chí Minh',
            'Đà Nẵng',
            'Sơn La',
            'Yên Bái',
            'Lạng Sơn',
            'Hải Phòng',
            'Tuyên Quang',
            'Quảng Trị',
            'Bắc Giang',
            'Hải Dương',
            'Cần Thơ',
            'Hà Nam',
            'Lào Cai',
            'Nam Định',
            'Bình Thuận',
            'Hưng Yên',
            'Quảng Bình',
            'Quảng Ninh',
            'Nghệ An',
            'Đồng Nai',
            'Tiền Giang',
            'Bình Định',
            'Vĩnh Phúc',
            'Hà Giang',
            'Khánh Hòa',
            'An Giang',
            'Bà Rịa - Vũng Tàu',
            'Bắc Kạn',
            'Bạc Liêu',
            'Bắc Ninh',
            'Bến Tre',
            'Bình Dương',
            'Bình Phước',
            'Cà Mau',
            'Cao Bằng',
            'Đắk Lắk',
            'Đắk Nông',
            'Điện Biên',
            'Đồng Tháp',
            'Gia Lai',
            'Hà Tĩnh',
            'Hậu Giang',
            'Hòa Bình',
            'Kiên Giang',
            'Kon Tum',
            'Lai Châu',
            'Lâm Đồng',
            'Long An',
            'Ninh Bình',
            'Ninh Thuận',
            'Phú Thọ',
            'Quảng Nam',
            'Quảng Ngãi',
            'Sóc Trăng',
            'Tây Ninh',
            'Thái Bình',
            'Thái Nguyên',
            'Thanh Hóa',
            'Thừa Thiên Huế',
            'Trà Vinh',
            'Vĩnh Long',
            'Phú Yên'
        ];
    }
}
