<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseManager extends Component
{
    public $name;
    public $slope;
    public $red_tee_rating;
    public $white_tee_rating;
    public $blue_tee_rating;
    public $red_tee_yardage;
    public $white_tee_yardage;
    public $blue_tee_yardage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'slope' => 'required|integer',
        'red_tee_rating' => 'required|numeric|between:0,999.9',
        'white_tee_rating' => 'required|numeric|between:0,999.9',
        'blue_tee_rating' => 'required|numeric|between:0,999.9',
        'red_tee_yardage' => 'required|integer',
        'white_tee_yardage' => 'required|integer',
        'blue_tee_yardage' => 'required|integer',
    ];

    public function createCourse()
    {
        $this->validate();

        $course = Course::create([
            'name' => $this->name,
            'slope' => $this->slope,
            'red_tee_rating' => $this->red_tee_rating,
            'white_tee_rating' => $this->white_tee_rating,
            'blue_tee_rating' => $this->blue_tee_rating,
            'red_tee_yardage' => $this->red_tee_yardage,
            'white_tee_yardage' => $this->white_tee_yardage,
            'blue_tee_yardage' => $this->blue_tee_yardage,
        ]);

        $this->reset();

        session()->flash('message', 'Course created successfully.');
        session()->flash('created_course_id', $course->id);
    }

    public function render()
    {
        return view('livewire.course-manager');
    }
}
