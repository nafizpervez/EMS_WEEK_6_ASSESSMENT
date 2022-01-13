import 'package:flutter/material.dart';

void main() => runApp(const MyApp());

/// This is the main application widget.
class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  static const String _title = 'Leave Application Log';

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: _title,
      home: Scaffold(
        appBar: AppBar(title: const Text(_title)),
        body: MyStatelessWidget(),
      ),
    );
  }
}

class MyStatelessWidget extends StatelessWidget {
  MyStatelessWidget({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      height: 150.0,
      child: Card(
        shape: RoundedRectangleBorder(
          borderRadius: BorderRadius.circular(5.0),
        ),
        elevation: 10,
        child: Padding(
          padding: const EdgeInsets.all(15.0),
          child: Row(
            children: [
              Expanded(
                child: Padding(
                  padding: const EdgeInsets.fromLTRB(50.0, 0.0, 50.0, 0.0),
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.center,
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: const [
                      Text('Applicant Name:'),
                      SizedBox(
                        height: 8.0,
                      ),
                      Text('Leave Type:'),
                      SizedBox(
                        height: 8.0,
                      ),
                      Text('Starting Date:'),
                      SizedBox(
                        height: 8.0,
                      ),
                      Text('Ending Date:'),
                      SizedBox(
                        height: 8.0,
                      ),
                      Text('Status:'),
                    ],
                  ),
                ),
              ),
              SizedBox(
                width: 160.0,
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  crossAxisAlignment: CrossAxisAlignment.stretch,
                  children: [
                    ElevatedButton.icon(
                      onPressed: () {},
                      icon: Icon(Icons.dehaze_outlined),
                      label: Text('Details'),
                    ),
                  ],
                ),
              ),
            ], 
          ),
        ),
      ),
    );
  }
}
