<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'dashboard.index',
                'title' => 'DashBoard Index',
                'description' => 'DashBoard Homepage',
                'context' => 'dashboard',
            ],
            [
                'name' => 'student.index',
                'title' => 'Student Homepage',
                'description' => 'Student Homepage',
                'context' => 'student',
            ],
            [
                'name' => 'student.view',
                'title' => 'Student View',
                'description' => 'Student View',
                'context' => 'student',
            ],
            [
                'name' => 'student_family_background.create',
                'title' => 'Add Student Family Background',
                'description' => 'Add Student Family Background',
                'context' => 'student',
            ],
            [
                'name' => 'student_family_background.update',
                'title' => 'Edit Student Family Background',
                'description' => 'Edit Student Family Background',
                'context' => 'student',
            ],
            [
                'name' => 'student_family_background.delete',
                'title' => 'Delete Student Family Background',
                'description' => 'Delete Student Family Background',
                'context' => 'student',
            ],
            [
                'name' => 'student_address.create',
                'title' => 'Add Student Address',
                'description' => 'Add Student Address',
                'context' => 'student',
            ],
            [
                'name' => 'student_address.update',
                'title' => 'Edit Student Address',
                'description' => 'Edit Student Address',
                'context' => 'student',
            ],
            [
                'name' => 'student_address.delete',
                'title' => 'Delete Student Address',
                'description' => 'Delete Student Address',
                'context' => 'student',
            ],
            [
                'name' => 'student_academic_information.create',
                'title' => 'Add Student Academic Information',
                'description' => 'Add Student Academic Information',
                'context' => 'student',
            ],
            [
                'name' => 'student_academic_information.update',
                'title' => 'Edit Student Academic Information',
                'description' => 'Edit Student Academic Information',
                'context' => 'student',
            ],
            [
                'name' => 'student_academic_information.delete',
                'title' => 'Delete Student Academic Information',
                'description' => 'Delete Student Academic Information',
                'context' => 'student',
            ],
            [
                'name' => 'student_emergency_contact.create',
                'title' => 'Add Student Emergency Contact',
                'description' => 'Add Student Emergency Contact',
                'context' => 'student',
            ],
            [
                'name' => 'student_emergency_contact.update',
                'title' => 'Edit Student Emergency Contact',
                'description' => 'Edit Student Emergency Contact',
                'context' => 'student',
            ],
            [
                'name' => 'student_emergency_contact.delete',
                'title' => 'Delete Student Emergency Contact',
                'description' => 'Delete Student Emergency Contact',
                'context' => 'student',
            ],
            [
                'name' => 'student_employment_information.create',
                'title' => 'Add Student Employment Infomation',
                'description' => 'Add Student Employment Infomation',
                'context' => 'student',
            ],
            [
                'name' => 'student_employment_information.update',
                'title' => 'Edit Student Employment Infomation',
                'description' => 'Edit Student Employment Infomation',
                'context' => 'student',
            ],
            [
                'name' => 'student_employment_information.delete',
                'title' => 'Delete Student Employment Infomation',
                'description' => 'Delete Student Employment Infomation',
                'context' => 'student',
            ],
            [
                'name' => 'user.index',
                'title' => 'User Index',
                'description' => 'User Index',
                'context' => 'user',
            ],
            [
                'name' => 'user.create',
                'title' => 'Add User',
                'description' => 'Add User',
                'context' => 'user',
            ],
            [
                'name' => 'user.update',
                'title' => 'Edit User',
                'description' => 'Edit User',
                'context' => 'user',
            ],
            [
                'name' => 'user.delete',
                'title' => 'Delete User',
                'description' => 'Delete User',
                'context' => 'user',
            ],
            [
                'name' => 'user_role.update',
                'title' => 'User Role',
                'description' => 'User Role',
                'context' => 'user',
            ],
            [
                'name' => 'roles.index',
                'title' => 'Roles Index',
                'description' => 'Roles Index',
                'context' => 'roles',
            ],
            [
                'name' => 'roles.create',
                'title' => 'Add Roles',
                'description' => 'Add Roles',
                'context' => 'roles',
            ],
            [
                'name' => 'roles.update',
                'title' => 'Edit Roles',
                'description' => 'Edit Roles',
                'context' => 'roles',
            ],
            [
                'name' => 'roles.delete',
                'title' => 'Delete Roles',
                'description' => 'Delete Roles',
                'context' => 'roles',
            ],
            [
                'name' => 'permissions.index',
                'title' => 'Permissions Index',
                'description' => 'Permissions Index',
                'context' => 'permissions',
            ],
            [
                'name' => 'permissions.create',
                'title' => 'Add Permissions',
                'description' => 'Add Permissions',
                'context' => 'permissions',
            ],
            [
                'name' => 'permissions.view',
                'title' => 'View Permissions',
                'description' => 'View Permissions',
                'context' => 'permissions',
            ],
            [
                'name' => 'permissions.update',
                'title' => 'Edit Permissions',
                'description' => 'Edit Permissions',
                'context' => 'permissions',
            ],
            [
                'name' => 'permissions.delete',
                'title' => 'Delete Permissions',
                'description' => 'Delete Permissions',
                'context' => 'permissions',
            ],
            [
                'name' => 'student_applications.index',
                'title' => 'Student Applications Index',
                'description' => 'Student Applications Index',
                'context' => 'student_applications',
            ],
            [
                'name' => 'student_applications.approve',
                'title' => 'Approve Student Applications',
                'description' => 'Approve Student Applications',
                'context' => 'student_applications',
            ],
            [
                'name' => 'course_provider.index',
                'title' => 'Course Provider Index',
                'description' => 'Course Provider Index',
                'context' => 'course_provider',
            ],
            [
                'name' => 'course_provider.create',
                'title' => 'Add Course Provider',
                'description' => 'Add Course Provider',
                'context' => 'course_provider',
            ],
            [
                'name' => 'course_provider.update',
                'title' => 'Edit Course Provider',
                'description' => 'Edit Course Provider',
                'context' => 'course_provider',
            ],
            [
                'name' => 'course_provider.delete',
                'title' => 'Delete Course Provider',
                'description' => 'Delete Course Provider',
                'context' => 'course_provider',
            ],
            [
                'name' => 'course_provider_courses.index',
                'title' => 'Course Provider Courses Index',
                'description' => 'Course Provider Courses Index',
                'context' => 'course_provider_courses',
            ],
            [
                'name' => 'course_provider_courses.create',
                'title' => 'Add Course Provider Courses',
                'description' => 'Add Course Provider Courses',
                'context' => 'course_provider_courses',
            ],
            [
                'name' => 'course_provider_courses.update',
                'title' => 'Edit Course Provider Courses',
                'description' => 'Edit Course Provider Courses',
                'context' => 'course_provider_courses',
            ],
            [
                'name' => 'course_provider_courses.delete',
                'title' => 'Delete Course Provider Courses',
                'description' => 'Delete Course Provider Courses',
                'context' => 'course_provider_courses',
            ],
            [
                'name' => 'course_provider_subjects.index',
                'title' => 'Course Provider Subjects Index',
                'description' => 'Course Provider Subjects Index',
                'context' => 'course_provider_subjects',
            ],
            [
                'name' => 'course_provider_subjects.create',
                'title' => 'Add Course Provider Subjects',
                'description' => 'Add Course Provider Subjects',
                'context' => 'course_provider_subjects',
            ],
            [
                'name' => 'course_provider_subjects.update',
                'title' => 'Edit Course Provider Subjects',
                'description' => 'Edit Course Provider Subjects',
                'context' => 'course_provider_subjects',
            ],
            [
                'name' => 'course_provider_subjects.delete',
                'title' => 'Delete Course Provider Subjects',
                'description' => 'Delete Course Provider Subjects',
                'context' => 'course_provider_subjects',
            ],
            [
                'name' => 'course_provider_courses_subjects.update',
                'title' => 'Edit Course Provider Course Subjects',
                'description' => 'Edit Course Provider Course Subjects',
                'context' => 'course_provider_courses_subjects',
            ],
            [
                'name' => 'campuses.index',
                'title' => 'Campuses Index',
                'description' => 'Campuses Index',
                'context' => 'campuses',
            ],
            [
                'name' => 'campuses.create',
                'title' => 'Add Campuses',
                'description' => 'Add Campuses',
                'context' => 'campuses',
            ],
            [
                'name' => 'campuses.update',
                'title' => 'Edit Campuses',
                'description' => 'Edit Campuses',
                'context' => 'campuses',
            ],
            [
                'name' => 'campuses.delete',
                'title' => 'Delete Campuses',
                'description' => 'Delete Campuses',
                'context' => 'campuses',
            ],
            [
                'name' => 'classrooms.index',
                'title' => 'Classrooms Index',
                'description' => 'Classrooms Index',
                'context' => 'classrooms',
            ],
            [
                'name' => 'classrooms.create',
                'title' => 'Add Classrooms',
                'description' => 'Add Classrooms',
                'context' => 'classrooms',
            ],
            [
                'name' => 'classrooms.update',
                'title' => 'Edit Classrooms',
                'description' => 'Edit Classrooms',
                'context' => 'classrooms',
            ],
            [
                'name' => 'classrooms.delete',
                'title' => 'Delete Classrooms',
                'description' => 'Delete Classrooms',
                'context' => 'classrooms',
            ],
            [
                'name' => 'academics.index',
                'title' => 'Academics Index',
                'description' => 'Academics Index',
                'context' => 'academics',
            ],
            [
                'name' => 'academics.update',
                'title' => 'Edit Academics',
                'description' => 'Edit Academics',
                'context' => 'academics',
            ],
            [
                'name' => 'academic_types.index',
                'title' => 'Academic Types Index',
                'description' => 'Academic Types Index',
                'context' => 'academic_types',
            ],
            [
                'name' => 'academic_types.create',
                'title' => 'Add Academic Types',
                'description' => 'Add Academic Types',
                'context' => 'academic_types',
            ],
            [
                'name' => 'academic_types.update',
                'title' => 'Edit Academic Types',
                'description' => 'Edit Academic Types',
                'context' => 'academic_types',
            ],
            [
                'name' => 'academic_types.delete',
                'title' => 'Delete Academic Types',
                'description' => 'Delete Academic Types',
                'context' => 'academic_types',
            ],
            [
                'name' => 'terms.index',
                'title' => 'Terms Index',
                'description' => 'Terms Index',
                'context' => 'terms',
            ],
            [
                'name' => 'terms.create',
                'title' => 'Add Terms',
                'description' => 'Add Terms',
                'context' => 'terms',
            ],
            [
                'name' => 'terms.view',
                'title' => 'View Terms',
                'description' => 'View Terms',
                'context' => 'terms',
            ],
            [
                'name' => 'terms.update',
                'title' => 'Edit Terms',
                'description' => 'Edit Terms',
                'context' => 'terms',
            ],
            [
                'name' => 'terms.delete',
                'title' => 'Delete Terms',
                'description' => 'Delete Terms',
                'context' => 'terms',
            ],
            [
                'name' => 'hr_job_positions.index',
                'title' => 'HR Job Position Index',
                'description' => 'HR Job Position Index',
                'context' => 'hr_job_positions',
            ],
            [
                'name' => 'hr_job_positions.create',
                'title' => 'Add HR Job Position',
                'description' => 'Add HR Job Position',
                'context' => 'hr_job_positions',
            ],
            [
                'name' => 'hr_job_positions.update',
                'title' => 'Edit HR Job Position',
                'description' => 'Edit HR Job Position',
                'context' => 'hr_job_positions',
            ],
            [
                'name' => 'hr_job_positions.delete',
                'title' => 'Delete HR Job Position',
                'description' => 'Delete HR Job Position',
                'context' => 'hr_job_positions',
            ],
            [
                'name' => 'hr_employees.index',
                'title' => 'HR Employees Index',
                'description' => 'HR Employees Index',
                'context' => 'hr_employees',
            ],
            [
                'name' => 'hr_employees.create',
                'title' => 'Add HR Employees',
                'description' => 'Add HR Employees',
                'context' => 'hr_employees',
            ],
            [
                'name' => 'hr_employees.view',
                'title' => 'View HR Employees',
                'description' => 'View HR Employees',
                'context' => 'hr_employees',
            ],
            [
                'name' => 'hr_employees.update',
                'title' => 'Edit HR Employees',
                'description' => 'Edit HR Employees',
                'context' => 'hr_employees',
            ],
            [
                'name' => 'hr_employees.delete',
                'title' => 'Delete HR Employees',
                'description' => 'Delete HR Employees',
                'context' => 'hr_employees',
            ],
            [
                'name' => 'pm_item_category.index',
                'title' => 'Payable Item Category Index',
                'description' => 'Payable Item Category Index',
                'context' => 'pm_item_category',
            ],
            [
                'name' => 'pm_item_category.create',
                'title' => 'Add Payable Item Category',
                'description' => 'Add Payable Item Category',
                'context' => 'pm_item_category',
            ],
            [
                'name' => 'pm_item_category.update',
                'title' => 'Edit Payable Item Category',
                'description' => 'Edit Payable Item Category',
                'context' => 'pm_item_category',
            ],
            [
                'name' => 'pm_item_category.delete',
                'title' => 'Delete Payable Item Category',
                'description' => 'Delete Payable Item Category',
                'context' => 'pm_item_category',
            ],
            [
                'name' => 'pm_item.index',
                'title' => 'Payable Item Index',
                'description' => 'Payable Item Index',
                'context' => 'pm_item',
            ],
            [
                'name' => 'pm_item.create',
                'title' => 'Add Payable Item',
                'description' => 'Add Payable Item',
                'context' => 'pm_item',
            ],
            [
                'name' => 'pm_item.update',
                'title' => 'Edit Payable Item',
                'description' => 'Edit Payable Item',
                'context' => 'pm_item',
            ],
            [
                'name' => 'pm_item.delete',
                'title' => 'Delete Payable Item',
                'description' => 'Delete Payable Item',
                'context' => 'pm_item',
            ],
            [
                'name' => 'pm_bundle.index',
                'title' => 'Payable Bundle Index',
                'description' => 'Payable Bundle Index',
                'context' => 'pm_bundle',
            ],
            [
                'name' => 'pm_bundle.create',
                'title' => 'Add Payable Bundle',
                'description' => 'Add Payable Bundle',
                'context' => 'pm_bundle',
            ],
            [
                'name' => 'pm_bundle.view',
                'title' => 'View Payable Bundle',
                'description' => 'View Payable Bundle',
                'context' => 'pm_bundle',
            ],
            [
                'name' => 'pm_bundle.update',
                'title' => 'Edit Payable Bundle',
                'description' => 'Edit Payable Bundle',
                'context' => 'pm_bundle',
            ],
            [
                'name' => 'pm_bundle.delete',
                'title' => 'Delete Payable Bundle',
                'description' => 'Delete Payable Bundle',
                'context' => 'pm_bundle',
            ],
            [
                'name' => 'pm_bundle_item.create',
                'title' => 'Payable Bundle Item Index',
                'description' => 'Payable Bundle Item Index',
                'context' => 'pm_bundle_item',
            ],
            [
                'name' => 'pm_bundle_item.update',
                'title' => 'Edit Payable Bundle Item',
                'description' => 'Edit Payable Bundle Item',
                'context' => 'pm_bundle_item',
            ],
            [
                'name' => 'pm_bundle_item.delete',
                'title' => 'Delete Payable Bundle Item',
                'description' => 'Delete Payable Bundle Item',
                'context' => 'pm_bundle_item',
            ],

        ];
        foreach ($permissions as $permission)
            Permission::updateOrCreate($permission, $permission);
    }
}
