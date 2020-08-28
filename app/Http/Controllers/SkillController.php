<?php
namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;
use Exception;

class SkillController extends Controller
{
    public function index() {
        try {
            return Skill::get();
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    public function show($id) {
        try {
            return Skill::find($id);
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    public function store(Request $request) {
        try {
            $skill = new Skill;
            $skill->name = $request->name;
            return $skill->save();
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }

    public function update(Request $request, $id) {
        try {
            $skill = Skill::find($id);
            $skill->name = $request->name;
            return $skill->save();
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage());
        }
    }
}
