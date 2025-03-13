use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(18, 25),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
