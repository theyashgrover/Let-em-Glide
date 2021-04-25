package com.example.letemglide;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import com.example.letemglide.ui.slideshow.SlideshowFragment;
import com.google.android.material.textfield.TextInputLayout;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class Registerdance extends AppCompatActivity implements AdapterView.OnItemSelectedListener {

    EditText name, email,phone, dance;
    private Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registerdance);




        button = (Button) findViewById(R.id.button2);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                openActivity();
            }
        });

        Spinner spinner = findViewById(R.id.spinner1);
        ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(this, R.array.Category, android.R.layout.simple_spinner_item);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);
        spinner.setOnItemSelectedListener(this);
    }
    public void openActivity() {
        Intent intent = new Intent(this, SlideshowFragment.class);
        startActivity(intent);
    }

    @Override
    public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
        String text = parent.getItemAtPosition(position).toString();

    }

    @Override
    public void onNothingSelected(AdapterView<?> parent) {

    }


    public void register(View view) {
       name = (EditText) findViewById(R.id.name);
       email = (EditText) findViewById(R.id.email);
       phone = (EditText) findViewById(R.id.phone);
       dance = (EditText) findViewById(R.id.dance);

        FirebaseDatabase db = FirebaseDatabase.getInstance();
        DatabaseReference root = db.getReference();
        root.setValue(name.getText().toString());
        name.setText("");
        root.setValue(email.getText().toString());
        email.setText("");
        root.setValue(phone.getText().toString());
        phone.setText("");
        root.setValue(dance.getText().toString());
        dance.setText("");

    }
}