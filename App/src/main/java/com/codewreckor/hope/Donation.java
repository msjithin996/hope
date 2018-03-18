package com.codewreckor.hope;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Donation extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_donation);
        EditText name = findViewById(R.id.name_donate);
        final EditText amount = findViewById(R.id.amount_donation);
        final Button pay = findViewById(R.id.donate_button);
        pay.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(amount.length()==0){
                    amount.requestFocus();
                    amount.setError("Field Empty");
                }
                else{
                    Intent payment = new Intent(Donation.this,Payment.class);
                    startActivity(payment);
                }
            }
        });
    }
}
