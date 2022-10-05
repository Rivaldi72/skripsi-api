<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedmiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedmi_user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->timestamps();
        });

        $defaultData = [
            [
                'id' => 1,
                'username' => 'admin123',
                'password' => 'admin123',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'username' => 'kepalasekolah',
                'password' => 'kepsek111',
                'role' => 'kepalasekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'username' => 'almas',
                'password' => 'almas123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'username' => 'diana',
                'password' => 'diana123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'username' => 'erlina',
                'password' => 'erlina123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'username' => 'gaya',
                'password' => 'gaya123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'username' => 'hengki',
                'password' => 'hengki123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'username' => 'intan',
                'password' => 'intan123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'username' => 'jessica',
                'password' => 'jessica123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'username' => 'keti',
                'password' => 'keti123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'username' => 'sabdana',
                'password' => 'sabdana123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 13,
                'username' => 'salamauddin',
                'password' => 'salamuddin123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'username' => 'siti',
                'password' => 'siti123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'username' => 'tatang',
                'password' => 'tatang123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'username' => 'venny',
                'password' => 'venny123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'username' => 'purba',
                'password' => 'purba123',
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'username' => '21288090',
                'password' => '21288090',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'username' => '21288091',
                'password' => '21288091',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'username' => '21288092',
                'password' => '21288092',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 21,
                'username' => '21288093',
                'password' => '21288093',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                'username' => '21288094',
                'password' => '21288094',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                'username' => '21288095',
                'password' => '21288095',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                'username' => '21288096',
                'password' => '21288096',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                'username' => '21288097',
                'password' => '21288097',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 26,
                'username' => '21288098',
                'password' => '21288098',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 27,
                'username' => '21288099',
                'password' => '21288099',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 28,
                'username' => '21288100',
                'password' => '21288100',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                'username' => '21288101',
                'password' => '21288101',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 30,
                'username' => '21288102',
                'password' => '21288102',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 31,
                'username' => '21288103',
                'password' => '21288103',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 32,
                'username' => '21288104',
                'password' => '21288104',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 33,
                'username' => '21288105',
                'password' => '21288105',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 34,
                'username' => '21288106',
                'password' => '21288106',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 35,
                'username' => '21288107',
                'password' => '21288107',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 36,
                'username' => '21288108',
                'password' => '21288108',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 37,
                'username' => '21288109',
                'password' => '21288109',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 38,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 39,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 40,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 41,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 42,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 43,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 44,
                'username' => 'agung',
                'password' => 'agung123',
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gedmi_user');
    }
}
