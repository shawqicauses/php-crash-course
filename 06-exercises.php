<?php
# Exercise 1. Reverse Given String
function reversed_string($string)
{
  $revered_string = "";
  for ($index = 0; $index < strlen($string); $index++):
    echo $string[strlen($string) - $index - 1] . "<br />";
    $revered_string = $revered_string . $string[strlen($string) - $index - 1];
  endfor;
  return $revered_string;
}

echo reversed_string("Reverse Me");
echo "<br />";

# Exercise 2. Students and Grades
# 2. 1. Create students array using student name/grades as a key
# 2. 2. Build inserting functionality using student name/grade
# 2. 3. Build fetching students functionality with alphabetical/grade sorting
# 2. 4. Build fetching students functionality using student grade
$students = []; # 2. 1.
function insert_student(&$students, $name, $grade)
{
  # 2. 2.
  array_push($students, ["name" => $name, "grade" => $grade]);
}

insert_student($students, "IT-Student", 2);
insert_student($students, "Software-Engineering-Student", 2);
insert_student($students, "Cyber-Security-Student", 1);
insert_student($students, "Web-Student", 3);
insert_student($students, "Android-Student", 3);
insert_student($students, "iOS-Student", 3);
insert_student($students, "Flutter-Student", 2);

print_r($students);
echo "<br />";

# 2. 3.
function fetch_students($students)
{
  $sorted_students = $students;
  foreach ($sorted_students as &$first_student):
    foreach ($sorted_students as &$second_student):
      if ($first_student["grade"] < $second_student["grade"]):
        [$first_student, $second_student] = [$second_student, $first_student];
      elseif ($first_student["grade"] === $second_student["grade"]):
        if ($first_student["name"] > $second_student["name"]):
          [$first_student, $second_student] = [$second_student, $first_student];
        endif;
        [$second_student, $first_student] = [$first_student, $second_student];
      endif;
    endforeach;
  endforeach;
  return $sorted_students;
}

print_r(fetch_students($students));
echo "<br />";

# 2. 4.
function fetch_students_grade($students, $grade)
{
  $filtered_array = [];
  foreach ($students as $student):
    if ($student["grade"] === $grade):
      array_push($filtered_array, $student);
    endif;
  endforeach;
  return $filtered_array;
}

print_r(fetch_students_grade($students, 2));
echo "<br />";

print_r(fetch_students_grade($students, 1));
echo "<br />";

?>
