<?php

namespace App\Imports;

use App\Models\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
            'name'     => $row['name'],
            'introduction'    => $row['introduction'],
            'location'    => $row['location'],
            'cost'    => $row['cost']
        ]);
    }
}
