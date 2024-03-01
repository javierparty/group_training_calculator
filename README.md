<h1>Group Training Price Calculator</h1>

The more participants a group training has, the less time each participant gets from the trainer. What happens when participants book different number of training sessions? How do you calculate the price that each participant has to pay?

Normally, the trainer charges a fixed price for the whole training course, and the course has a fixed number of sessions. So the first data the user hast to enter is:

1. The total cost of the course.</span>
2. The number of sessions in the course.
3. The number of people participating.

The user then has to enter:

1. The name of each participant.
2. The number of sessions booked by each participant. 
3. The _fairness_ criterion.

The different approaches to _fairness_ are:

1. The total cost of the course is devided equally among participants, independently of the number of sessions each participant booked. Bias towards those who booked the whole course.
2. Depending on the number of participants and sessions booked, there is a fixed price session for each participant, so that each of them pays the same per session. The total cost of the course for a participant is the session price multiplied by the number of sessions each participant booked. Lightly bias towards those whoe booked more sessions, because they are getting more time from the trainer for their money.
3. This approach derives the price directly from the time each participant gets from the trainer. The fixed session price is devided by the number of participants in each session. In this way, a session with eight participants will cost less per person than a session with four participants. The cost of the course for a participant is the sum of what the participant has to pay for each session. Lightly bias towards those whe booked less sessions.

With this information, the program delivers the price each participant has to pay.