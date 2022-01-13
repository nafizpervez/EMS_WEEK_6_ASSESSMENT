import 'dart:ui';

import 'package:dotted_border/dotted_border.dart';
import 'package:flutter/material.dart';
import 'package:flutter_form_builder/flutter_form_builder.dart';
import 'package:flutter_dropzone/flutter_dropzone.dart';

import 'input_style.dart';

void main() => runApp(const MyApp());

/// This is the main application widget.
class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  static const String _title = 'PR Form';

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: _title,
      home: Scaffold(
        appBar: AppBar(title: const Text(_title)),
        body: PrForm(),
      ),
    );
  }
}

final _approvalHeader = [
  'Prepared by',
  'Agreed & Recommended by',
  'Recommended by',
  'Recommended by',
  'Recommended by',
  'Recommended by'
];

/// This is the stateful widget that the main application instantiates.

class PrForm extends StatefulWidget {
  const PrForm({Key? key}) : super(key: key);

  @override
  State<PrForm> createState() => _PrFormState();
}

class _PrFormState extends State<PrForm> {
  var selected = '';
  @override
  Widget build(BuildContext context) {
    final ButtonStyle style =
        ElevatedButton.styleFrom(textStyle: const TextStyle(fontSize: 20));
    final _formKey = GlobalKey<FormBuilderState>();

    return FormBuilder(
      child: ListView(
        children: [
          Row(
            children: [
              Expanded(
                flex: 2,
                child: Column(
                  children: [
                    const SizedBox(
                      height: 10.0,
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'pr',
                        decoration: inputStyle(
                          'PR',
                          null,
                          null,
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'pr_date',
                        decoration: inputStyle(
                          'PR Date',
                          null,
                          null,
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderChoiceChip(
                        name: 'expanse_type',
                        alignment: WrapAlignment.spaceEvenly,
                        decoration: inputStyle(
                          'Expanse Type',
                          null,
                          null,
                        ),
                        options: const [
                          FormBuilderFieldOption(
                              value: 'Test', child: Text('OPEX')),
                          FormBuilderFieldOption(
                              value: 'Test 1', child: Text('CAPEX')),
                        ],
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'proponent',
                        decoration: inputStyle(
                          'Proponent',
                          null,
                          null,
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'purpose_of_purchase',
                        decoration: inputStyle(
                          'Purpose of Purchase',
                          null,
                          null,
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'user',
                        decoration: inputStyle(
                          'User',
                          null,
                          null,
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(5.0),
                      child: FormBuilderTextField(
                        name: 'department',
                        decoration: inputStyle(
                          'Department Name',
                          null,
                          null,
                        ),
                      ),
                    ),
                  ],
                ),
              ),
              Expanded(
                flex: 2,
                child: Container(height: 445, child: ExmapleDragTarget()),
              ),
            ],
          ),
          Table(
            // border: TableBorder.all(
            //     color: Colors.black, style: BorderStyle.solid, width: 0),
            children: [
              // TableRow(
              //   children: _prHeader
              //       .map((header) => Text(
              //             header,
              //             textAlign: TextAlign.center,
              //             style: const TextStyle(fontSize: 15.0),
              //           ))
              //       .toList(),
              // ),

              TableRow(
                children: [
                  Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'sl',
                          decoration: inputStyle(
                            'SL',
                            null,
                            null,
                          ),
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderDropdown(
                          name: 'Purchase Type',
                          allowClear: true,
                          focusColor: Colors.transparent,
                          decoration: inputStyle(
                            'Purchase Type',
                            null,
                            null,
                          ),
                          items: [
                            'International Purchase',
                            'Local Purchase',
                            'Ready Stock',
                            'Approx Importation Cost',
                            'Product Delivery, Supply, Installation & Implementation Cost'
                          ]
                              .map(
                                (e) => DropdownMenuItem(
                                  child: Text('$e'),
                                  value: (e),
                                ),
                              )
                              .toList(),
                        ),
                      ),
                    ],
                  ),
                  Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'item_description',
                          decoration: inputStyle(
                            'Item Description',
                            null,
                            null,
                          ),
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'qty',
                          decoration: inputStyle(
                            'Qty',
                            null,
                            null,
                          ),
                        ),
                      ),
                    ],
                  ),
                  Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'measurement_of_unit',
                          decoration: inputStyle(
                            'Measurement of Unit',
                            null,
                            null,
                          ),
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'required_date',
                          decoration: inputStyle(
                            'Required Date',
                            null,
                            null,
                          ),
                        ),
                      ),
                    ],
                  ),
                  Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'estimated_unit_price',
                          decoration: inputStyle(
                            'Estimated Unit Price',
                            null,
                            null,
                          ),
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.all(5.0),
                        child: FormBuilderTextField(
                          name: 'estimated_total_price',
                          decoration: inputStyle(
                            'Estimated Total Price',
                            null,
                            null,
                          ),
                        ),
                      ),
                    ],
                  ),
                ],
              ),
            ],
          ),
          const SizedBox(
            height: 15.0,
          ),
          Padding(
            padding: const EdgeInsets.all(5.0),
            child: ElevatedButton(
              onPressed: () {},
              child: Text('Add More'),
            ),
          ),
          const SizedBox(
            height: 15.0,
          ),
          Padding(
            padding: const EdgeInsets.all(5.0),
            child: FormBuilderTextField(
              name: 'comment',
              decoration: inputStyle(
                'Comment',
                null,
                null,
              ),
            ),
          ),
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: const [
                SizedBox(
                  height: 15.0,
                ),
                Text('Approval',
                    textAlign: TextAlign.center,
                    style: TextStyle(fontSize: 18.0)),
              ],
            ),
          ),
          Padding(
            padding: const EdgeInsets.all(5.0),
            child: Table(
              border: TableBorder.all(
                  color: Colors.black, style: BorderStyle.solid, width: 0),
              children: [
                TableRow(
                    children: _approvalHeader
                        .map(
                          (header) => Text(
                            header,
                            textAlign: TextAlign.center,
                            style: const TextStyle(fontSize: 15.0),
                          ),
                        )
                        .toList()),
                TableRow(
                  children: [
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'username',
                          style: TextStyle(fontSize: 15.0),
                        ),
                        Text(
                          'designation',
                          style: TextStyle(fontSize: 14.0),
                        ),
                      ],
                    ),
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'Mohammad Ripon',
                          style: TextStyle(fontSize: 15.0),
                        ),
                        Text(
                          'Asst. Manager',
                          style: TextStyle(fontSize: 14.0),
                        ),
                      ],
                    ),
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'Mahmud Hussain Chowdhury',
                          style: TextStyle(fontSize: 14.0),
                        ),
                        Text(
                          'Senior Manager',
                          style: TextStyle(
                            fontSize: 14.0,
                          ),
                        ),
                      ],
                    ),
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'Faridul Hasan Shuvo',
                          style: TextStyle(fontSize: 15.0),
                        ),
                        Text(
                          'CEO',
                          style: TextStyle(fontSize: 14.0),
                        ),
                      ],
                    ),
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'Mohammed Abdul Alim',
                          style: TextStyle(fontSize: 15.0),
                        ),
                        Text(
                          'Finance & Accounts',
                          style: TextStyle(fontSize: 14.0),
                        ),
                      ],
                    ),
                    Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: const [
                        SizedBox(
                          height: 20.0,
                        ),
                        Icon(
                          Icons.done,
                          color: Colors.black12,
                        ),
                        Text(
                          'Zahir Ahmed',
                          style: TextStyle(fontSize: 15.0),
                        ),
                        Text(
                          'Managing Director',
                          style: TextStyle(fontSize: 14.0),
                        ),
                      ],
                    ),
                  ],
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}

// class DropTarget {}

class ExmapleDragTarget extends StatefulWidget {
  const ExmapleDragTarget({Key? key}) : super(key: key);

  @override
  _ExmapleDragTargetState createState() => _ExmapleDragTargetState();
}

class _ExmapleDragTargetState extends State<ExmapleDragTarget> {
  late DropzoneViewController controller1;

  String message1 = 'Drop something here';
  bool highlighted1 = false;

  @override
  Widget build(BuildContext context) => (Container(
        child: Container(
          padding: EdgeInsets.all(10.0),
          decoration: BoxDecoration(
            color: highlighted1 ? Colors.lightGreen : Colors.transparent,
          ),
          child: DottedBorder(
            radius: Radius.circular(10.0),
            borderType: BorderType.RRect,
            dashPattern: <double>[5, 2],
            child: Stack(
              children: [
                buildZone1(context),
                Center(
                    child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    Icon(Icons.add),
                    Text(message1),
                  ],
                )),
              ],
            ),
          ),
        ),
      ));

  Widget buildZone1(BuildContext context) => Builder(
        builder: (context) => DropzoneView(
          operation: DragOperation.copy,
          cursor: CursorType.grab,
          onCreated: (ctrl) => controller1 = ctrl,
          onLoaded: () => print('Zone 1 loaded'),
          onError: (ev) => print('Zone 1 error: $ev'),
          onHover: () {
            setState(() => highlighted1 = true);
            print('Zone 1 hovered');
          },
          onLeave: () {
            setState(() => highlighted1 = false);
            print('Zone 1 left');
          },
          onDrop: (ev) {
            print('Zone 1 drop: ${ev.name}');
            setState(() {
              message1 = '${ev.name} dropped';
              highlighted1 = false;
            });
          },
        ),
      );
}
