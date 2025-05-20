<?php

namespace App\Helpers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ValidationHelper
{
    public static function getValidationRules(
        ?int $id = null,
        array $updateFields = [],
        string $modelClass,
        array $extraRules = []
    ) {
        // Access model's fillable attributes (adjust as needed)
        $fillable = (new $modelClass)->getFillable();

        $rules = [];
        foreach ($fillable as $field) {
            $rules[$field] = []; // Initialize empty rule set for each field
        }

        // Add conditional unique rules for update scenarios
        if ($id && !empty($updateFields)) {
            foreach ($updateFields as $field) {
                if (in_array($field, $fillable)) { // Ensure field is fillable
                    $rules[$field][] = Rule::unique($modelClass::getTable(), $field)->ignore($id);
                }
            }
        }

        // Merge additional rules for flexibility
        $rules = array_merge($rules, $extraRules);
        return $rules;
    }
}
