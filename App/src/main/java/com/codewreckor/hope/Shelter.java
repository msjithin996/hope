package com.codewreckor.hope;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Shelter extends AppCompatActivity {
    EditText name, phone, location, number_refugees;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_shelter);
        Button submit = findViewById(R.id.form_submit);
        name = findViewById(R.id.username_form);
        phone = findViewById(R.id.phon_form);
        location = findViewById(R.id.place_form);
        number_refugees = findViewById(R.id.no_form);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                final String Name=name.getText().toString();

                final String phone_str=phone.getText().toString();
                final String location_str=location.getText().toString();

                final String refu=number_refugees.getText().toString();
                if(name.length()==0)
                {
                    name.requestFocus();
                    name.setError("Field Empty");
                }
                else if(phone.length()==0)
                {
                    phone.requestFocus();
                    phone.setError("Field Empty");
                }
                else if(location.length()==0)
                {
                    location.requestFocus();
                    location.setError("Field Empty");
                }
                else if(number_refugees.length()==0)
                {
                    number_refugees.requestFocus();
                    number_refugees.setError("Field Empty");
                }
                else {
                    Toast.makeText(Shelter.this, "Subited successfully", Toast.LENGTH_SHORT).show();
                    finish();
                }
            }
        });

    }
}
