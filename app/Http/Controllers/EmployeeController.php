<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Requests\StoreScheduleChangeRequest;
use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Schema;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $employees = Employee::orderBy('updated_at', 'desc')->paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request) : RedirectResponse
    {
        Employee::create($request->validated());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee) : View
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee) : View
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee) : RedirectResponse
    {
        $employee->update($request->validated());
        return redirect()->route('employees.index') ->with('success','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee) : RedirectResponse
    {
        $employee->delete();
           
        return redirect()->route('employees.index')->with('success','Employee deleted successfully');
    }

    /**
     * Display the future change form page.
     */
    public function schedule(Employee $employee) : View
    {
        return view('employees.schedule', compact('employee'));
    }

    /**
     * Schedule a future change.
     */
    public function storeSchedule(StoreScheduleChangeRequest $request, Employee $employee): RedirectResponse
    {
        $columns = Schema::getColumnListing('employees');

        foreach ($columns as $column) {
            if ($request->has($column) && $request->input($column) !== null) {
                $employee->futureChanges()->create([
                    'column' => $column,
                    'new_value' => $request->input($column),
                    'change_date' => $request->input('change_date'),
                ]);
            }
        }

        return redirect()->route('employees.index')->with('success', 'Changes scheduled successfully.');
    }
}
