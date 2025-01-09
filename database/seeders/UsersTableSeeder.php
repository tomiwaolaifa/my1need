<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'VALENTINE EJEMBI', 'email' => 'valejembi@gmail.com'],
            ['name' => 'EKENE EZUMAH', 'email' => 'ekenepraisejah65@yahoo.com'],
            ['name' => 'NKEIRUKA OLUCHI OPARA', 'email' => 'nktreasure32@yahoo.com'],
            ['name' => 'YOGISH LAD', 'email' => 'smartyogi008@yahoo.com'],
            ['name' => 'SHAKIRAT AKEEM', 'email' => 'hakeem.shakiratu@gmail.com'],
            ['name' => 'onoja onoja', 'email' => 'samuelonoja06@gmail.com'],
            ['name' => 'russell emadamerho', 'email' => 'russellemadamerho35@gmail.com'],
            ['name' => 'MICHAEL OSUJI', 'email' => 'michael.osuji@yahoo.com'],
            ['name' => 'IBRAHIM ADESHINA ALABI', 'email' => 'alabi631@gmail.com'],
            ['name' => 'SUNDAY IGELE', 'email' => 'igelebrite@gmail.com'],
            ['name' => 'NICHOLAS OMANUDHOWO', 'email' => 'nicholistics@gmail.com'],
            ['name' => 'ADEMOLA ADEOLA', 'email' => 'adeolaademola37@gmail.com'],
            ['name' => 'ESTHER OLUWADARE', 'email' => 'e.oluwadare@yahoo.co.uk'],
            ['name' => 'abdulrahim ibrahim', 'email' => 'eyegeeeglobalpropertys@gmail.com'],
            ['name' => 'ADEDEJI KUKOYI', 'email' => 'kukoyiomotayo12@gmail.com'],
            ['name' => 'Olayinka SAMUEL KOYA', 'email' => 'koya.olayinka@gmail.com'],
            ['name' => 'OLAJIDE ALUKO', 'email' => 'waleolajide523@gmail.com'],
            ['name' => 'ONOS AVWARODAYE', 'email' => 'onosboy21@yahoo.com'],
            ['name' => 'EDWIN OBE', 'email' => 'eddyfizzle@gmail.com'],
            ['name' => 'FUNMILAYO ISHOLA', 'email' => 'phoonmie@yahoo.co.uk'],
            ['name' => 'OMOBOLAJI OLADEJO', 'email' => 'stephen4john@yahoo.com'],
            ['name' => 'ISAAC OGUNDEJI', 'email' => 'ogundejiisaac@gmail.com'],
            ['name' => 'AZUKAEGO ENWEMASOR', 'email' => 'eazukaego@yahoo.com'],
            ['name' => 'NASMOT LAWAL', 'email' => 'beejaygenius56@yahoo.com'],
            ['name' => 'BASIRAT AZEEZ', 'email' => 'basiratazeez024@gmail.com'],
            ['name' => 'JUSTICE NWACHUKWU', 'email' => 'nwachukwujustice@gmail.com'],
            ['name' => 'GLORY OBILOR', 'email' => 'obilornnamdi1@gmail.com'],
            ['name' => 'EMMANUEL OLANIYAN', 'email' => 'ayoolaemmanuel760@gmail.com'],
            ['name' => 'SAMUEL OKO', 'email' => 'sammysuxess@gmail.com'],
            ['name' => 'JERRY GODWIN', 'email' => 'bluetectic2@gmail.com'],
            ['name' => 'EBUKA ONYEGUIRI', 'email' => 'conyeguiri@gmail.com'],
            ['name' => 'OSAGIE EGBE', 'email' => 'egbeosas90@gmail.com'],
            ['name' => 'BOLANLE OLUSOGA', 'email' => 'ameliajake25@gmail.com'],
            ['name' => 'ADEOLA LAWAL', 'email' => 'Adeolahamiat@gmail.com'],
            ['name' => 'ADEDAYO OMOREGIE', 'email' => 'omoregieadedayo@gmail.com'],
            ['name' => 'KAZEEM OLADAPO', 'email' => 'oladapkazeem@gmail.com'],
            ['name' => 'FUNMILAYO ADEMOLA', 'email' => 'Tobysonft44@gmail.com'],
            ['name' => 'NKEM OLOMIWE', 'email' => 'ruthinal216@gmail.com'],
            ['name' => 'HENRY DAMKOR', 'email' => 'mailhenridam@gmail.com'],
            ['name' => 'MERCY AMADI', 'email' => 'Mercydotamadi@gmail.com'],
            ['name' => 'PETER AKAMIOKHOR', 'email' => 'akamsis4evareal@yahoo.com'],
            ['name' => 'YAKUBU ABUBAKAR', 'email' => 'yaksmanutd01@gmail.com'],
            ['name' => 'TEMITOPE BALOGUN', 'email' => 'balogunopemipovictor@gmail.com'],
            ['name' => 'FIDEL EBIDUWA', 'email' => 'fidelityconsult@yahoo.co.uk'],
            ['name' => 'YUSUF SHOFOLUWE', 'email' => 'shofoluweyusuf@gmail.com'],
            ['name' => 'AYODEJI AGBATO', 'email' => 'ayodejiagbato@yahoo.com'],
            ['name' => 'EMMANUEL ADEBAYO', 'email' => 'emmex4real225@gmail.com'],
            ['name' => 'ADEWUMI ADEBAYO', 'email' => 'josephwumi13@gmail.com'],
            ['name' => 'VICTOR IHEKAIRE', 'email' => 'ihekaluci@gmail.com'],
            ['name' => 'SARAH ITYAV', 'email' => 'ityavsarah@gmail.com'],
            ['name' => 'Suleiman Yusuf', 'email' => 'Sulemaji@gmail.com'],
            ['name' => 'OLUWAFEMI AKINOLA', 'email' => 'Fastidious96@yahoo.com'],
            ['name' => 'ORIYOMI OGUNLEYE', 'email' => 'ogunleyeoriyomibolanle@gmail.com'],
            ['name' => 'UMAR ABDULLAHI', 'email' => 'aumarbalewa@gmail.com'],
            ['name' => 'olushola adedeji', 'email' => 'hardheyshola01@gmail.com'],
            ['name' => 'SAMUEL AFUWAPE', 'email' => 'sunnynoah6@gmail.com'],
            ['name' => 'Emmanuel Ajuwa', 'email' => 'ajuwa01@yahoo.com'],
            ['name' => 'MORENIKEJI JINADU', 'email' => 'temiwilly@gmail.com'],
            ['name' => 'DAVID ATUME', 'email' => 'daviespan2@yahoo.com'],
            ['name' => 'SAMUEL ADEDOTUN', 'email' => 'adamsmith860@gmail.com'],
            ['name' => 'SURAJ BABAYALE', 'email' => 'babayalesuraj@yahoo.com'],
            ['name' => 'EMMANUEL AJAYI', 'email' => 'Ajayiemmanuel274@gmail.com'],
            ['name' => 'ROSEMARY DIWEREMIE', 'email' => 'Rosemarydiweremie@gmail.com'],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'country' => 'Nigeria',
                'position' => 'need_seeker',
                'phone' => $this->generateRandomPhone(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Generate a random Nigerian phone number.
     *
     * @return string
     */
    private function generateRandomPhone()
    {
        $prefixes = ['070', '080', '081', '090', '091'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = rand(10000000, 99999999);
        return $prefix . $number;
    }
}