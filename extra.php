CREATE VIEW student_result as SELECT student_mark.bangla,student_mark.english,student_mark.math,student_mark.social_science,student_mark.religion,student_mark.science,student_mark.physical_education,students.std_name,students.roll,students.class FROM students
INNER JOIN student_mark on students.std_id=student_mark.std_id


CREATE view student_attendance as SELECT attendance.attend,attendance.attend_time,students.std_name,students.roll,students.class from attendance INNER JOIN students on attendance.std_id=students.std_id