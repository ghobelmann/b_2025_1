<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Hole;
use App\Models\Course;

class HoleManager extends Component
{
public $course_id;
public $holes = [];

public function mount($course_id)
{
$this->course_id = $course_id;

// Initialize the holes array with hole numbers and default yardages
for ($i = 1; $i <= 18; $i++) {
$this->holes[$i] = [
'hole_number' => $i,
'red_tee_yardage' => '',
'white_tee_yardage' => '',
'blue_tee_yardage' => '',
];
}
}

public function createHoles()
{
foreach ($this->holes as $hole) {
Hole::create([
'course_id' => $this->course_id,
'hole_number' => $hole['hole_number'],
'red_tee_yardage' => $hole['red_tee_yardage'],
'white_tee_yardage' => $hole['white_tee_yardage'],
'blue_tee_yardage' => $hole['blue_tee_yardage'],
]);
}

session()->flash('message', 'Holes created successfully.');

return redirect()->route('courses.index');
}

public function render()
{
return view('livewire.hole-manager', [
'course' => Course::find($this->course_id),
]);
}
}
