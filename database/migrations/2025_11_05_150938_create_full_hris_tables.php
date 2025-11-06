<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        return;
        // 1️⃣ Roles
        // Schema::create('roles', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->unique();
        //     $table->string('description')->nullable();
        //     $table->timestamps();
        // });

        // 3️⃣ Departments
        // Schema::create('departments', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->foreignId('parent_id')->nullable()->constrained('departments')->onDelete('cascade');
        //     $table->text('description')->nullable();
        //     $table->timestamps();
        // });

        // 4️⃣ Positions
        // Schema::create('positions', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
        //     $table->integer('level')->nullable();
        //     $table->timestamps();
        // });

        // 5️⃣ Employees
        // Schema::create('employees', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('employee_code')->unique();
        //     $table->string('full_name');
        //     $table->enum('gender', ['L', 'P']);
        //     $table->date('birth_date')->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('email')->nullable();
        //     $table->text('address')->nullable();
        //     $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
        //     $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
        //     $table->date('join_date')->nullable();
        //     $table->enum('status', ['aktif', 'resign', 'cuti'])->default('aktif');
        //     $table->string('photo')->nullable();
        //     $table->timestamps();
        // });

        // 6️⃣ Attendances
        // Schema::create('attendances', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        //     $table->date('date');
        //     $table->time('check_in')->nullable();
        //     $table->time('check_out')->nullable();
        //     $table->enum('status', ['hadir', 'izin', 'sakit', 'cuti', 'alpha'])->default('hadir');
        //     $table->string('notes')->nullable();
        //     $table->timestamps();
        // });

        // 7️⃣ Leaves
        // Schema::create('leaves', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        //     $table->string('leave_type');
        //     $table->date('start_date');
        //     $table->date('end_date');
        //     $table->integer('total_days');
        //     $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        //     $table->text('reason')->nullable();
        //     $table->foreignId('approved_by')->nullable()->constrained('users')->onDelete('set null');
        //     $table->timestamps();
        // });

        // 8️⃣ Payrolls
        // Schema::create('payrolls', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        //     $table->string('period'); // ex: 2025-11
        //     $table->decimal('basic_salary', 15, 2)->default(0);
        //     $table->decimal('allowance', 15, 2)->default(0);
        //     $table->decimal('deduction', 15, 2)->default(0);
        //     $table->decimal('net_salary', 15, 2)->default(0);
        //     $table->enum('status', ['draft', 'paid'])->default('draft');
        //     $table->timestamp('paid_at')->nullable();
        //     $table->timestamps();
        // });

        // 9️⃣ Taxes & BPJS
        // Schema::create('taxes', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
        //     $table->string('month'); // ex: 2025-11
        //     $table->decimal('pph21', 15, 2)->default(0);
        //     $table->decimal('bpjs_kes', 15, 2)->default(0);
        //     $table->decimal('bpjs_tk', 15, 2)->default(0);
        //     $table->decimal('total', 15, 2)->default(0);
        //     $table->timestamps();
        // });

        // 🔟 Job Vacancies (Recruitment)
        // Schema::create('job_vacancies', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
        //     $table->enum('status', ['open', 'closed'])->default('open');
        //     $table->timestamps();
        // });

        // 11️⃣ Applicants
        // Schema::create('applicants', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('job_vacancy_id')->constrained('job_vacancies')->onDelete('cascade');
        //     $table->string('full_name');
        //     $table->string('email');
        //     $table->string('phone')->nullable();
        //     $table->string('resume')->nullable();
        //     $table->enum('status', ['applied', 'interview', 'accepted', 'rejected'])->default('applied');
        //     $table->timestamps();
        // });

        // 12️⃣ Documents / Knowledge Base
        // Schema::create('documents', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('category')->nullable();
        //     $table->string('file_path');
        //     $table->foreignId('uploaded_by')->constrained('users')->onDelete('cascade');
        //     $table->timestamps();
        // });

        // 13️⃣ Settings
        // Schema::create('settings', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('key')->unique();
        //     $table->text('value')->nullable();
        //     $table->timestamps();
        // });
    }

    public function down(): void
    {
        // Schema::dropIfExists('settings');
        // Schema::dropIfExists('documents');
        // Schema::dropIfExists('applicants');
        // Schema::dropIfExists('job_vacancies');
        // Schema::dropIfExists('taxes');
        // Schema::dropIfExists('payrolls');
        // Schema::dropIfExists('leaves');
        // Schema::dropIfExists('attendances');
        // Schema::dropIfExists('employees');
        // Schema::dropIfExists('positions');
        // Schema::dropIfExists('departments');
        // Schema::dropIfExists('users');
        // Schema::dropIfExists('roles');
    }
};
