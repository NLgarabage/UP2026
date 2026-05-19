<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($name){
        return 'hello world ' . $name;
    }
    public function all($surname, $name){
        return 'hello world! ' . $surname . ' ' . $name;
    }
    public function cities($id) {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5'
        ];
        foreach ($users as $key => $value){
            if ($id == $key){
                $res = $users[$id];
                break;
            }
            else{
                $res = 'такого имени нет';
            }
        }
        return $res;
    }
}

?>